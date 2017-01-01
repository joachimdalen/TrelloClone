/**
 * Created by Dev on 29.12.2016.
 */
// Get the modal
var initCardModal = function () {
    console.log('Loaded modal.js');
    var modal = document.getElementById('newCardModal');
    var editModal = document.getElementById('editCardModal');
    var cancelButton = document.getElementById("closeModal");
    var btn = document.getElementById("newModalTrigger");
    var span = document.getElementsByClassName("close")[0];
    var spanEdit = document.getElementsByClassName("close")[1];
    cancelButton.onclick = function () {
        modal.style.display = "none";
    };

// When the user clicks the button, open the modal
    /*    btn.onclick = function () {
     modal.style.display = "block";
     };*/
    $(document).on('click', '#newModalTrigger', function () {
        modal.style.display = "block";
        console.log($(this).attr("data-listID"));
        var input = document.getElementById('card-new-input');
        var listName = $(this).attr("data-listID");
        var listTag = document.getElementById('card-new-inlist');
        $(listTag).text('in ' + listName);
        input.focus();
    });
    $(document).on('click', '.list-item', function () {
        editModal.style.display = "block";
    });
    $(document).on('click', '#card-edit-label', function () {
        var label = document.getElementById('card-edit-label');
        var input = document.getElementById('card-edit-field');
        label.style.display = "none";
        input.style.display = "block";
        input.focus();
    });
    var input = document.getElementById('card-edit-field');
    $(document).on("focusout", input, function () {
        var label = document.getElementById('card-edit-label');
        label.style.display = "block";
        input.style.display = "none";
    });
// When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };
    spanEdit.onclick = function () {
        editModal.style.display = "none";
    };

// When the user clicks anywhere outside of the modal, close it
    /*    window.onclick = function (event) {
     if (event.target == modal) {
     modal.style.display = "none";
     }
     };*/
    var list = document.querySelector('ul');
    list.addEventListener('click', function (ev) {
        if (ev.target.tagName === 'LI') {
            ev.target.classList.toggle('checked');
            var labelContainer = $('#modal-labels');
            if(ev.target.classList.contains('checked')){
                //Add label to header here
                var newSpan = $('\<span class="label label-bg label-red"></span>').text('label label');
                newSpan.appendTo(labelContainer);
            }
            else {
                //remove labels from header here
                alert('remove labels from header here');
            }
        }
    }, false);

}, CardModal = function () {
    "use strict";
    return {
        init: function () {
            initCardModal()
        }
    }
}();