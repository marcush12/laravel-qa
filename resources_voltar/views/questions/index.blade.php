@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h2>Todas as Perguntas</h2>
                    <div class="ml-auto">
                      <a class="btn btn-outline-secondary" href="{{route('questions.create')}}">Faça uma Pergunta</a>
                    </div>
                  </div>
                
                </div>

                <div class="card-body">
                    @foreach($questions as $question)
                      <div class="media">
                        <div class="media-body">
                          <h3 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a></h3>
                          <p class="lead">
                            Perguntas feitas por 
                            <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                            <small class="text-muted">{{$question->created_date}}</small>
                          </p>
                          {{str_limit($question->body, 250)}}
                        </div>
                      </div>
                      <hr>
                    @endforeach
                    <div class="text-center">
                      {{$questions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
