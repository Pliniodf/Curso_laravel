@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            @foreach ($cursos as $curso)
                <div class="col s12 m4">
                <div class="card" style="height: 560px">
                    <div class="card-image" style="object-fit: contain">
                    <img src="{{asset($curso->imagem)}}">
                    </div>
                    <div class="card-content">
                        <h4>{{$curso->titulo}}</h4>
                        <p>{{$curso->descricao}}</p>
                    </div>
                    <div class="card-action">
                    <a href="#">Ver mais...</a>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


