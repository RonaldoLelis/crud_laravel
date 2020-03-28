@extends('templates.template')

@section('content')

<div class="container">

        
    <div class="row">
        <div class="col-md-8">
        <h1 class="text-center">Livraria do Bosque</h1>
        </div>
        <div class="col-md-4 mt-3 mb-4">  
        <a href="{{ url('books') }}">
                <button class="btn btn-success">LOGIN</button>
            </a>
        </div>
    </div>

    <div class="col-sm-12 m-auto">
        {{ csrf_field() }} 
       

    </div>

</div>

    
@endsection