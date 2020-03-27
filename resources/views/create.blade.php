@extends('templates.template')

@section('content')

    @if (isset($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach ($errors->all() as $erro)
                {{ $erro }}<br>
            @endforeach
        </div>
    @endif

    <div class="col-md-6">
        <form name="formCad" id="formCad" method="POST" action="{{ url('/books') }}">
        {{ csrf_field() }}
       
            <strong>Título:</strong>
            <input type="text" class="form-control" name="title" required>
            <strong>Autor:</strong>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="">Selecione</option>
                @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }} </option>
                @endforeach
            </select>
            <strong>Páginas:</strong>
            <input type="text" class="form-control" name="pages" required>
            <strong>Preço:</strong>
            <input type="text" class="form-control" name="price" required> 
        <button type="submit" class="btn btn-success" style="margin: 15px; float: left">Cadastrar</button>
        </form>
        <a href="{{ url('/books') }}"> <button class="btn btn-primary" style="float: right">Voltar</button></a>
    </div>

@endsection