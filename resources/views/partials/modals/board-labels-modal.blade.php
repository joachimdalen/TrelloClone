<div id="boardLabelsModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="closeBoardLabelsSpan">&times;</span>
            <span class="input-control edit-label">Labels</span>
        </div>
        <div class="modal-toolbar">
            <input type="text" placeholder="Username" class="input-control">
            <a class="tool-button tool-button-sm button-green" href="#"><i class="fa fa-plus-circle"></i></a>
        </div>
        <div class="modal-body">
            {{--
            Idea: Have the labels as span with two buttons, one for changing the color and one for deleting the label.
            Adding a new label will be done the same way as adding a new team member.


            --}}
            <span class="sub-title no-italic">Labels in board</span>
         {{--   <div class="modal-section-toolbar">
                <input type="text" placeholder="Username" class="input-control">
                <a class="tool-button tool-button-sm button-green" href="#"><i class="fa fa-plus-circle"></i></a>
            </div>--}}

        </div>
        <div class="modal-footer">
            <a class="tool-button tool-button-sm " id="closeBoardLabelsButton"><i class="fa fa-ban"></i> Cancel</a>
            <a class="tool-button tool-button-sm button-green" href="#"><i class="fa fa-save"></i> Save</a>
        </div>
    </div>
</div>
<script>
    function openTab(tabName) {
        var i;
        var x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
    }

</script>