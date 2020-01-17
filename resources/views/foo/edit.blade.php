@extends('layouts.base')

@section('title')
    foo id {{ $foo->id }}: {{ $foo->name }}
@endsection

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
<form action="{{ route('foo.update', $foo->id) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <strong>Nom:</strong>
        <input type="text" name="name" placeholder="Nom" value="{{ $foo->name }}">
    </div>
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>
@endsection
