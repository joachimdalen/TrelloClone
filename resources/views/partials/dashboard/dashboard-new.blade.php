@extends('app')
@section('content')
    <div class="fill-page-container dashboard-base" ng-init="init()" ng-controller="dashboardController">
        <div class="center-container-parent">
            <div class="section-container">
                <h1>Your boards</h1>
                <ul class="list-inline boards-list" ng-show="contentLoaded">
                    <li ng-repeat="board in boards" style="background-color: @{{ board.color }}">
                        <a href="/b/@{{ board.board_id }}" class="board-title">
                            <span>    @{{board.name}}</span>
                            {{--    <p>    @{{board.description}}</p>--}}
                        </a>
                    </li>
                    <li class="new-board">
                        <a class="board-title">
                            <span style="color: #474747;"> Add a new board....</span>
                        </a>
                    </li>
                    <li class="new-board" style="display: inline-grid">
                        <form ng-submit="submitNewBoard()" class=" board-title new-board-container">
                            <input type="text" placeholder="Board Name" ng-model="boardName" required/>
                            <div class="new-board-controls">
                                <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus"></i>
                                </button>
                                <a class="btn btn-block btn-danger" ng-click="cancelAddList()"><i class="fa fa-ban"></i></a>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    @include('partials.modals.new-board-modal')
@stop
@section('scripts')
    <script src="/app/controllers/dashboardController.js"></script>
@stop