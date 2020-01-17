@extends('layouts.base')

@section('title')
    foo id {{ $foo->id }}: {{ $foo->name }}
@endsection

@section('banner')
    <div class="banner">bannière de la page des foos</div>
@endsection

@section('content')
<div>
    <strong>Id:</strong>
    <input type="text" value="{{ $foo->id }}" readonly>
</div>
<div>
    <strong>Nom:</strong>
    <input type="text" value="{{ $foo->name }}" readonly>
</div>
@endsection
