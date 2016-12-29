@extends('app')
@section('content')
    @include('partials.board.board-header')
    <div class="board-container color-fill">
        @include('partials.board.lists')
    </div>

    <div class="menu-container" id="side-menu">
        <div class="menu-header">
            <h3>Menu</h3>
            <hr>
        </div>
    </div>
    <!-- MODAL START-->
@include('partials.board.new-card-modal')
    <!-- MODAL END -->
@stop