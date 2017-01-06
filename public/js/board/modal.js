var initCardModal = function () {
    console.log('Loaded modal.js');
};
var registerModal = function (modalName, modalTrigger, modalCancel) {
    var modal = document.getElementById(modalName);
    console.log(modalTrigger);
    $(document).on('click', "#" + modalTrigger, function () {
        modal.style.display = "block";
        console.log('open');
    });
    var cancelLength = modalCancel.length;
    for (var i = 0; i < cancelLength; i++) {
        $(document).on('click', "#" + modalCancel[i], function () {
            console.log('Close');
            modal.style.display = "none";
        });
    }
};
//TODO: For debugging only.
var getColor = function () {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
};
var registerLabelList = function (listName) {
        $(document).on('click', "#" + listName, function (e) {
            if (e.target.tagName === 'LI') {
                e.target.classList.toggle('checked');
                var labelContainer = $('#modal-labels');
                //TODO: For debugging only.
                $(e.target).attr('id', 'f5g8g42');
                if (e.target.classList.contains('checked')) {
                    var newSpan = $('\<span class="label label-bg data-tag="f5g8g42"></span>').text(e.target.innerHTML).css('background-color', getColor()).attr('id', 'f5g8g42');
                    newSpan.appendTo(labelContainer);
                } else {
                    //Workaround
                    //TODO: Find some other way of keeping track of the labels.
                    $('#modal-labels').find('#' + e.target.id).remove();
                    //$('#' + e.target.id).remove();
                    // console.log(e.target.id);


                    // console.log(e.target.id);
                    //labelContainer.remove('[data-tag=' + $(e.target).data('tag') + ']');
                    /*  $('#modal-labels').remove();
                     labelContainer.remove('[data-tag=f5g8g42]');*/
                    /*
                     labelContainer.remove('f5g8g42');
                     labelContainer.find('[data-tag=' + $(e.target).data('tag') + ']'[0]).remove();
                     console.log($('#modal-labels').remove('[data-tag=' + $(e.target).data('tag') + ']'));*/
                    //      alert('remove labels from header here');
                }
            }
        })
    },
    CardModal = function () {
        "use strict";
        return {
            init: function () {
                initCardModal()
            },
            registerModal: function (modalName, modalTrigger, modalCancel) {
                registerModal(modalName, modalTrigger, modalCancel);
            },
            registerLabelList: function (listName) {
                registerLabelList(listName);
            }
        }
    }();