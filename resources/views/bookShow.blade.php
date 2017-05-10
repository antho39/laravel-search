@extends('layouts.layout')
@section('content')
    <div>

        <a href="{{URL::previous()}}" class="btn btn-success">Retour</a>
        <div class="panel panel-default">
            <h1>Livre #{{ $book->id }}</h1>
            <div class="panel-body">
                <b>Auteur:</b> {{ $book->author }} <br>
                <b>Description:</b> {{ $book->description }}
            </div>
        </div>
    </div>
@endsection