var initCardModal = function () {
    console.log('Loaded modal.js');
};
var registerModal = function (modalName, modalTrigger, modalCancel) {

        var modal = document.getElementById(modalName);
        $(document).on('click', "#" + modalTrigger, function () {
            modal.style.display = "block";
        });
        var cancelLength = modalCancel.length;
        for (var i = 0; i < cancelLength; i++) {
            $(document).on('click', "#" + modalCancel[i], function () {
                modal.style.display = "none";
            });
        }
    },

    CardModal = function () {
        "use strict";
        return {
            init: function () {
                initCardModal()
            },
            register: function (modalName, modalTrigger, modalCancel) {
                registerModal(modalName, modalTrigger, modalCancel);
            }
        }
    }();