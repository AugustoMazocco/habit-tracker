<x-layout>
    <main class="py-10">
        <h1>
            Cadastrar Novo Hábito
        </h1>

        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            <form action="{{ route('habits.store') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-2 mb-2">
                    <label for="name">
                        Nome do Hábito
                    </label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Ex: Ler 10 páginas"
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror"
                    >
                    @error('name')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="bg-white p-2 border-2 mt-1"
                >
                    Cadastrar hábito
                </button>

            </form>
        </section>
    </main>
</x-layout>