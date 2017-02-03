@extends('app')
@section('content')
    <div class="fill-page-container color-fill">
        <div class="container">
            <h1 style="color: white">Opps.. The board {{$board_id}} could not be found </h1>
            <a href="/u/boards">Go back to boards</a>
        </div>
    </div>
@stop