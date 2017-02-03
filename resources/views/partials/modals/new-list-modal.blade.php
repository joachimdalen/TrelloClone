<div id="newListModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content modal-new">
        {{--<form id="newListForm" method="POST" action="/lists/new">--}}
        <form id="newListForm" ng-submit="submitNewList()">
            <div class="modal-header">
                <span class="close" id="closeNewListSpan" ng-click="modalClose">&times;</span>
                <input name="name" id="list-new-input" ng-model="listTitle" type="text" placeholder="Title here" class="input-control">
                <span class="sub-title">in This is my new list</span>
            </div>
            <div class="modal-footer">
                <a class="tool-button tool-button-sm button-red" id="closeNewListButton" ng-click="modalClose"><i class="fa fa-ban"></i> Cancel</a>
                <button class="tool-button tool-button-sm button-green" id="submitNewList" type="submit"><i class="fa fa-plus-circle"></i> Add</button>
                {{-- <a class="tool-button tool-button-sm button-green" href="#" data-role="submit"><i class="fa fa-plus-circle"></i> Add</a>--}}
            </div>
        </form>
    </div>
</div>