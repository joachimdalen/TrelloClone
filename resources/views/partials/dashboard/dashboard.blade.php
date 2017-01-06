@extends('app')
@section('content')
    <div class="fill-page-container dashboard-base">
        <h1 class="sub-header sub-header-dark">Your and your teams boards</h1>
        <div class="dashboard-container flexcontainer" id="dashboard-container">
            <div class="dashboard-card" id="newBoardTrigger">
                <div class="dcard-title">
                    <span>Create new board</span>
                    <img src="/img/add.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Click me to create a new board!</p>
                </div>
            </div>
            <div class="dashboard-card" id="archive">
                <div class="dcard-title">
                    <span>Archive</span>
                    <img src="/img/archive.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">All your archived items end up in here. From here
                        you can also restore the items if needed.</p>
                </div>
            </div>
            {{--<div class="dashboard-card">
                <div class="dcard-title">
                    <span>Task list creation</span>
                    <img src="/img/board.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Projects related to the creation of TaskList, plus
                        issues</p>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="dcard-title">
                    <span>Task list creation</span>
                    <img src="/img/board.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Projects related to the creation of TaskList, plus
                        issues</p>
                </div>
            </div>
            <div class="dashboard-card" href="">
                <div class="dcard-title">
                    <span>Task list creation</span>
                    <img src="/img/board.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Projects related to the creation of TaskList, plus
                        issues</p>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="dcard-title">
                    <span>Task list creation</span>
                    <img src="/img/board.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Projects related to the creation of TaskList, plus
                        issues</p>
                </div>
            </div>--}}
        </div>
    </div>
    @include('partials.modals.new-board-modal')
@stop
@section('scripts')
    <script src="/js/dashboard/dashboard.js"></script>
    <script src="/js/board/modal.js"></script>
    <script rel="script">
        $(document).ready(function () {
            CardModal.registerModal('newBoardModal', 'newBoardTrigger', ["closeNewBoardSpan","closeNewBoardButton"]);
        //    ControlRegistry.labelToInput('card-edit-label', 'card-edit-field', true, true);
            Dashboard.init();
        });
    </script>
@stop