@extends('templates.template')

@section('content')

    <div class="col-md-6">
        <form name="formCad" id="formCad" method="POST" action="{{ url('/books') }}">
        {{ csrf_field() }}
       
            <strong>Título:</strong>
            <input type="text" class="form-control" name="title">
            <strong>Autor:</strong>
            <select class="form-control" name="id_user" id="id_user">
                <option value="">Selecione</option>
                @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }} </option>
                @endforeach
            </select>
            <strong>Páginas:</strong>
            <input type="text" class="form-control" name="pages">
            <strong>Preço:</strong>
            <input type="text" class="form-control" name="price"> 
        <button type="submit" class="btn btn-success" style="margin: 5px; float: left">Cadastrar</button>
        <a href="{{ url('/books') }}"> <button class="btn btn-primary" style="margin: 5px; float: right">Voltar</button></a>
        </form>
    </div>

@endsection