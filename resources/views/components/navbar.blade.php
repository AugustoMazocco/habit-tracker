<nav>
    <ul class="flex gap-3 items-center">
        <li>
            <a href="{{ route('habits.index') }}" class="{{ Route::is('habits.index') ? 'font-bold underline' : ''}} text-md border-r-2 border-habit-orange pr-2 pr-2 hover:underline">
                Hoje
            </a>
        </li>
        <li>
            <a href="#" class="text-md border-r-2 border-habit-orange pr-2 hover:underline">
                Histórico
            </a>
        </li>
        <li>
            <a href="#" class="text-md border-r-2 border-habit-orange pr-2 pr-2 hover:underline">
                Calendário
            </a>
        </li>
        <li>
            <a href="{{ route('habits.settings') }}" class="{{ Route::is('habits.settings') ? 'font-bold underline' : ''}} text-md pr-2 hover:underline">
                Gerenciar Hábitos
            </a>
        </li>
    </ul>
</nav>