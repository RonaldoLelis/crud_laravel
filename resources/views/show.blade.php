@extends('templates.template')

@section('content')

    <div class="col-md-6">
        <ul class="list-group">
            @php
                $user = $book->find($book->id)->relUsers;
            @endphp
            <li class="list-group-item active">Visualizar</li>
            <li class="list-group-item"><strong>Título:</strong> {{ $book->title }}</li>
            <li class="list-group-item"><strong>Páginas:</strong> {{ $book->pages }}</li>
            <li class="list-group-item"><strong>Preço:</strong> {{ $book->price }}</li>
            <li class="list-group-item"><strong>Autor:</strong> {{ $user->name }}</li>
            <li class="list-group-item"><strong>E-mail:</strong> {{ $user->email }}</li>
        </ul>
    <a href="{{ url('/books') }}"> <button class="btn btn-primary" style="margin: 5px; float: right">Voltar</button></a>
    </div>

@endsection