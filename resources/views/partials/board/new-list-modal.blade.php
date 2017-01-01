<div id="newListModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content modal-new">
        <form id="newListForm" method="POST" action="http://localhost:8001/v1/boards/card/new">
            <div class="modal-header">
                <span class="close">&times;</span>
                <input name="listName" id="list-new-input" type="text" placeholder="Title here" class="input-control">
                <span class="sub-title">in This is my new list</span>
            </div>
            <div class="modal-footer">
                <a class="tool-button tool-button-sm button-red" id="closeModal"><i class="fa fa-ban"></i> Cancel</a>
                <a class="tool-button tool-button-sm button-green" href="#" id="submitNewList"><i class="fa fa-plus-circle"></i> Add</a>
                {{-- <a class="tool-button tool-button-sm button-green" href="#" data-role="submit"><i class="fa fa-plus-circle"></i> Add</a>--}}
            </div>
        </form>
    </div>
</div>