<x-layout>
    <main class="py-10">
        <h1>
            Veja seus hábitos ganharem vida
        </h1>
    </main>

    @auth
        <meta http-equiv="refresh" content="url={{ route('habits.index') }}">
    @endauth
</x-layout>