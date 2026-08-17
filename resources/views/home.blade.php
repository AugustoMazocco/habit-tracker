<x-layout>
    <main class="py-10">
        <h1>
            Veja seus hábitos ganharem vida
        </h1>
    </main>

    @auth
        <p>
            Bem vindo(a) {{ auth()->user()->name }}!
            @dd(auth()->user())
        </p>
    @endauth
</x-layout>