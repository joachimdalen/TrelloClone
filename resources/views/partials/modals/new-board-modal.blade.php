<div id="newBoardModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content modal-new">
        <form id="newBoardForm" method="POST" action="">
            <div class="modal-header">
                <span class="close">&times;</span>
                <input name="boardName" id="card-new-input" type="text" placeholder="Board name" class="input-control">
                <textarea class="card-description input-control" name="boardDescription" id="board-new-description"
                          placeholder="Description"></textarea>
            </div>
            <div class="modal-footer">
                <a class="tool-button tool-button-sm button-red" id="closeModal"><i class="fa fa-ban"></i> Cancel</a>
                <a class="tool-button tool-button-sm button-green" href="#" id="submitNewBoard"><i
                            class="fa fa-plus-circle"></i> Add</a>
            </div>
        </form>
    </div>
</div>