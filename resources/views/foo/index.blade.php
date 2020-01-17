@extends('layouts.base')

@section('title', 'Liste des foos')

@section('banner')
    <div class="banner">bannière de la page des foos</div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div>
                <a href="{{ route('foo.create') }}">Créer un nouveau foo</a>
            </div>

            <ul>
            @foreach($foos as $foo)
                <li>
                    foo id {{ $foo->id }}: {{ $foo->name }}
                    <form action="{{ route('foo.destroy',$foo->id) }}" method="post">
                        <a href="{{ route('foo.show', $foo->id) }}">voir</a>
                        <a href="{{ route('foo.edit', $foo->id) }}">modifier</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">supprimer</button>
                    </form>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection
