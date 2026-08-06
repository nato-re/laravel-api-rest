<a href="}}">Criar música</a>
<ul>

@foreach ($musics as $music)
    <li>{{ $music->name }} <a href="/musics/{{ $music->id }}">Detalhes</a> </li>
@endforeach
</ul>