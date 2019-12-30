@extends('layouts.layout')

@section('content')
    <h3>Novo cliente</h3>
    <h4>{{ $clientType == \App\Client::TYPE_INDIVIDUAL ? 'Pessoa Física' : 'Pessoa Jurídica' }}</h4>
    <a href="{{ route('clients.create', ['client_type' => \App\Client::TYPE_INDIVIDUAL]) }}">Pessoa Física</a> | 
    <a href="{{ route('clients.create', ['client_type' => \App\Client::TYPE_LEGAL]) }}">Pessoa Jurídica</a>
    @include('form._form_errors')
    <form action="{{ route('clients.store') }}" method="post">
        @include('admin.clients._form')
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
@endsection