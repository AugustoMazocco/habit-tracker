@php
    $type = session()->has('success') ? 'success'
        :(session()->has('error') ? 'error'
        : 'warning');

    $message = session($type);

    $styles = [
        'success' => 'border-green-400 bg-green-100 text-green-700',
        'error' =>  'border-red-400 bg-red-100 text-red-700',
        'warning' => 'border-yellow-400 bg-yellow-100 text-yellow-700'
    ];
@endphp
@if(session()->has('success') || session()->has('error') || session()->has('warning'))
    <div id='toast' class="absolute top-22 right-20 border-2 block p-3 rounded mb-4 flex gap-2 {{ $styles[$type] }}">

        <x-dynamic-component :component="'icons.' . $type" class="mt-4" />
        
        <p>
            {{ $message }}
        </p>
    </div>

    <script>
        setTimeout(() => {
            const $toast = document.getElementById('toast');
            console.log($toast);
            if ($toast) {
                toast.remove();
            }
        }, 3000);
    </script>
@endif
