<x-layout>
    <main class="py-10">
        <h1>
            Faça seu login
        </h1>
        <section>
            <form action="/login" method="POST">
                @csrf

                <input
                    type="email"
                    name="email"
                    placeholder="your@email.com"
                    class="bg-white p-2 border-2"
                >

                <input
                    type="password"
                    name="password"
                    placeholder="*******"
                    class="bg-white p-2 border-2"
                >

                <button
                    type="submit"
                    class="bg-white p-2 border-2"
                >
                    entrar
                </button>

                @error('email')
                    <p class="text-red-500 text-xl mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </form>
        </section>
    </main>
</x-layout>