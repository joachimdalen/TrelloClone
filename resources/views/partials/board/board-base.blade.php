@extends('app')
@section('content')
    <div ng-controller="boardController">
        @include('partials.board.board-header')
        @include('partials.board.lists')
        <div class="menu-container" id="side-menu" ng-show="showMenu">
            <div class="menu-header">
                <h3>Menu</h3>
                <hr>
                <a id="labelsTrigger">Add new card...</a>

            </div>
        </div>
        <!-- MODAL START-->
        @include('partials.modals.new-card-modal')
        @include('partials.modals.edit-card-modal')
        @include('partials.modals.board-labels-modal')
        @include('partials.modals.new-list-modal')
        <input type="hidden" id="board-id-hidden" value="{{$board_id}}">
        <!-- MODAL END -->
    </div>
@stop
@section('scripts')
    {{--  <script src="/js/board/board.js"></script>--}}
    {{--  <script src="/js/board/modal.js"></script>--}}
    <script src="/js/global/controlregistry.js"></script>
    <script src="/js/global/toast.js"></script>
    <script src="/app/controllers/boardController.js"></script>
    <script rel="script">
        $(document).ready(function () {
            //    Board.init();
            CardModal.init();
            //closeEditCardSpan - closeEditCardButton
            /*CardModal.registerModal('editCardModal', 'editCardTrigger', ["closeEditCardSpan", "closeEditCardButton"]);
             CardModal.registerModal('boardLabelsModal', 'labelsTrigger', ["closeBoardLabelsSpan", "closeBoardLabelsButton"]);
             CardModal.registerModal('newCardModal', 'newCardTrigger', ["closeNewCardSpan", "closeNewCardButton"]);
             CardModal.registerModal('newListModal', 'newListTrigger', ["closeNewListSpan", "closeNewListButton"]);
             CardModal.registerLabelList('labelList');*/
            ControlRegistry.labelToInput('card-edit-label', 'card-edit-field', true, true);
            ControlRegistry.copyToInput('card-edit-label', 'card-edit-field');
            ControlRegistry.labelToInput('board-title-label', 'board-title-field', true, true);
            ControlRegistry.copyToInput('board-title-label', 'board-title-field');
            ControlRegistry.labelToInputLists('list-header-label', 'list-header-field', true, true);
            //  ControlRegistry.copyToInput('list-header-label', 'list-header-field')

        });
    </script>
@stop