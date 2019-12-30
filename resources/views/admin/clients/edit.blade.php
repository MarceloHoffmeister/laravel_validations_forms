@extends('layouts.layout')

@section('content')
    <h3>Novo cliente</h3>
    @include('form._form_errors')
    <form action="{{ route('clients.update', ['client' => $client->id]) }}" method="post">
        {{ method_field('PUT') }}
        @include('admin.clients._form')
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection