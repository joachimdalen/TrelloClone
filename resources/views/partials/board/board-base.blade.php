@extends('app')
@section('content')
    @include('partials.board.board-header')
    <div class="fill-page-container board-container color-fill">
        @include('partials.board.lists')
    </div>

    <div class="menu-container" id="side-menu">
        <div class="menu-header">
            <h3>Menu</h3>
            <hr>
        </div>
    </div>
    <!-- MODAL START-->
    @include('partials.modals.new-card-modal')
    @include('partials.modals.edit-card-modal')
    <!-- MODAL END -->
@stop
@section('scripts')
    <script src="/js/board/board.js"></script>
    <script src="/js/board/modal.js"></script>
    <script src="/js/global/controlregistry.js"></script>
    <script rel="script">

        $(document).ready(function () {
            Board.init();
            CardModal.init();
            //closeEditCardSpan - closeEditCardButton
            CardModal.registerModal('editCardModal', 'editCardTrigger', ["closeEditCardSpan", "closeEditCardButton"]);
            CardModal.registerModal('newCardModal', 'newCardTrigger', ["closeNewCardSpan", "closeNewCardButton"]);
            CardModal.registerLabelList('labelList');
            ControlRegistry.labelToInput('card-edit-label', 'card-edit-field', true, true);
        });

    </script>
@stop