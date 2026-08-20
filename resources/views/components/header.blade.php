<header class="bg-white border-bottom border-b-2 flex items-center justify-between p-4">
    {{-- LOGO --}}

    <div class="flex items-center gap-2">
        <a href="{{ route('habits.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
            HT
        </a>
        <p>
            Habit Tracker
        </p>
    </div>

    {{-- GITHUB --}}
    <div>
        @auth
        <form 
            class='inline' 
            action="{{ route(name: 'auth.logout') }}" 
            method="POST"
        >
            @csrf

            <button type="submit" class="p-2 habit-shadow-lg bg-habit-white habit-btn">
                Sair
            <button>
        </form>
        @endauth

        @guest
            <div class="flex gap-2">
                <a href="{{ route('site.register') }}" class="p-2 habit-shadow-lg bg-habit-white habit-btn">
                    Cadastrar
                </a>

                <a href="{{ route('site.login') }}" class="p-2 habit-shadow-lg bg-habit-orange habit-btn">
                    Login
                </a>
            </div>
        @endguest
    </div>
</header>