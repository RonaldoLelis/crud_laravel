@extends('templates.template')

@section('content')

    @if (isset($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach ($errors->all() as $erro)
                {{ $erro }}<br>
            @endforeach
        </div>
    @endif
    
    <div class="col-md-6 text-center"> @if(isset($book)) <h3>Editar</h3> @else <h3>Cadastrar</h3>@endif</div>

    <div class="col-md-6">

        @if(isset($book))
            <form name="formEdit" id="formEdit" method="POST" action="{{ url("/books/$book->id") }}">   
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="POST" action="{{ url('/books') }}">
        @endif
            {{ csrf_field() }}       
            <strong>Título:</strong>
            <input type="text" class="form-control" name="title" value="{{ $book->title ?? '' }}" required>
            <strong>Autor:</strong>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="{{ $book->relUsers->id ?? '' }}">{{ $book->relUsers->name ?? 'Selecione' }}</option>
                @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }} </option>
                @endforeach
            </select>
            <strong>Páginas:</strong>
            <input type="text" class="form-control" name="pages" value="{{ $book->pages ?? '' }}" required>
            <strong>Preço:</strong>
            <input type="text" class="form-control" name="price" value="{{ $book->price ?? '' }}" required> 
        <button type="submit" class="btn btn-success" style="margin: 15px; float: left">@if(isset($book)) Editar @else Cadastrar @endif</button>
        </form>
        <a href="{{ url('/books') }}"> <button class="btn btn-primary" style="float: right">Voltar</button></a>
    </div>

@endsection