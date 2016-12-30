/**
 * Created by Dev on 29.12.2016.
 */
// Get the modal
var initCardModal = function() {
    console.log('Loaded modal.js');
    var modal = document.getElementById('newCardModal');

    // Get the cancel button
    var cancelButton = document.getElementById("closeModal");
// Get the button that opens the modal
    var btn = document.getElementById("newModalTrigger");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
//Close the modal on "Cancel" click
    cancelButton.onclick = function () {
        modal.style.display = "none";
    };

// When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    };

// When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };

// When the user clicks anywhere outside of the modal, close it
/*    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };*/
    var list = document.querySelector('ul');
    list.addEventListener('click', function(ev) {
        if (ev.target.tagName === 'LI') {
            ev.target.classList.toggle('checked');
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