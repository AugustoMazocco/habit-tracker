<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View as View;

class HabitController extends Controller
{
    public function index(): View
    {   
        $habits = Auth::user()->habits;

        return view( 'dashboard', compact('habits'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( view: 'habits.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        Auth::user()->habits()->create($validated);

        return redirect()
            ->route( route: 'habits.index')
            ->with('success', 'Habito criado com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        return view( 'habits.edit', compact('habit') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if($habit->user_id != auth()->user()->id){
            abort( code: 403, message:"sai pra lá o pangaré");
        }
        $habit->update($request->all());

        return redirect()
            ->route( route: 'habits.index')
            ->with('success', 'Hábito atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if($habit->user_id != auth()->user()->id){
            abort( code: 403, message:"sai pra lá o pangaré");
        }
        
        $habit->delete();

        return redirect()
            ->route( route:'habits.index' )
            ->with('success', 'Hábito removido com sucesso!');
    }
}
