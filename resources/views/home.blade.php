<h1>
    O El come
</h1>
<p>
    Olá, {{ $name }}
</p>
<p>
    Seus hábitos são:
</p>
<ul>
    @foreach($habits as $item)
        <li>
            {{ $item }}
        </li>
    @endforeach
</ul>

@auth
    <p>
        Você está logado!
    </p>
@endauth

@guest
    <p>
        Você não está logado
    </p>
@endguest