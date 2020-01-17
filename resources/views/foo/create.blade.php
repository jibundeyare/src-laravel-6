@extends('layouts.base')

@section('title', 'Créer un nouveau foo')

@section('banner')
    <div class="banner">bannière de la page des foos</div>
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('foo.store') }}" method="post">
    @csrf
    @method('POST')
    <div>
        <strong>Nom:</strong>
        <input type="text" name="name" placeholder="Nom" value="{{ $foo->name }}">
    </div>
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>
@endsection
