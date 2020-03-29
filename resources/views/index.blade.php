@extends('templates.template')

@section('content')

<div class="container">

        
    <div class="row">
        <div class="col-md-8">
        <h1 class="text-center">Livraria do Bosque</h1>
        </div>
        <div class="col-md-4 mt-3 mb-4">  
        <a href="{{ url('books/create') }}">
                <button class="btn btn-success">Cadastrar</button>
            </a>
        </div>
    </div>

    <div class="col-sm-12 m-auto">
        {{ csrf_field() }} 
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>                
                <th scope="col">Ações</th>                
              </tr>
            </thead>
            <tbody>
            @foreach ($book as $books)
                @php
                    $user = $books->find($books->id)->relUsers;
                @endphp

               <tr>
                <th scope="row">{{ $books->id }}</th>
                <td>{{ $books->title }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $books->price }}</td>
                <td>
                    <a href="{{ url("books/$books->id") }}">
                        <button class="btn btn-info">Visualizar</button>
                    </a>
               
                    <a href="{{ url("books/$books->id/edit") }}">
                        <button class="btn btn-warning">Editar</button>
                    </a>
               
                    <a href="{{ url("books/$books->id")}}" class="js-del">
                        <button class="btn btn-danger">Excluir</button>
                    </a>
                <td>
              </tr>    
            @endforeach                         
            </tbody>
          </table>
          <hr>
          {{ $book->links() }}

    </div>

</div>

    
@endsection