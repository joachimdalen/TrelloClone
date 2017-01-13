<div id="newBoardModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content modal-new">
        <form id="newBoardForm" method="POST" action="/boards/new">
            {{ csrf_field() }}
            <div class="modal-header">
                <span class="close" id="closeNewBoardSpan">&times;</span>
                <input name="name" id="card-new-input" type="text" placeholder="Board name" class="input-control">
                <textarea class="card-description input-control" name="description" id="board-new-description"
                          placeholder="Description"></textarea>
            </div>
            <div class="modal-footer">
                <a class="tool-button tool-button-sm button-red" id="closeNewBoardButton"><i class="fa fa-ban"></i> Cancel</a>
                <a class="tool-button tool-button-sm button-green" href="#" id="submitNewBoard"><i
                            class="fa fa-plus-circle"></i> Add</a>
            </div>
        </form>
    </div>
</div>