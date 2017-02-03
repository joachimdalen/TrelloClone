<div id="newCardModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content modal-new">
      {{--  <form id="newCardForm" method="POST" action="http://localhost:8001/v1/boards/card/new">--}}
        <form ng-submit="submitNewCard()">
            {{ csrf_field() }}
            <div class="modal-header">
                <span class="close" id="closeNewCardSpan" ng-click="modalClose">&times;</span>
                <input name="name" id="card-new-input" type="text" ng-model="cardTitle" placeholder="Title here" class="input-control">
                <span class="sub-title" id="card-new-inlist">in @{{ currentList.name }}</span>
            </div>
            <div class="modal-footer">
                <a class="tool-button tool-button-sm button-red" id="closeNewCardButton" ng-click="modalClose"><i class="fa fa-ban"></i> Cancel</a>
                <button class="tool-button tool-button-sm button-green" id="submitNewCard" type="submit"><i class="fa fa-plus-circle"></i> Add</button>
               {{-- <a class="tool-button tool-button-sm button-green" href="#" data-role="submit"><i class="fa fa-plus-circle"></i> Add</a>--}}
            </div>
        </form>
    </div>
</div>