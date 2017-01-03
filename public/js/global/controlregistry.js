console.log('Loaded controlregistry.js');

var labelToInput = function (labelId, inputId, shouldFocusOnChange, shouldRevert) {
        var label = document.getElementById(labelId);
        var input = document.getElementById(inputId);
        $(document).on('click', "#" + labelId, function () {
            label.style.display = "none";
            input.style.display = "block";
            if (shouldFocusOnChange) {
                input.focus();
            }
        });
        if (shouldRevert) {
            $(document).on("focusout", "#" + inputId, function () {
                var label = document.getElementById(labelId);
                label.style.display = "block";
                input.style.display = "none";
            });
        }
    },
    ControlRegistry = function () {
        "use strict";
        return {
            labelToInput: function (labelId, inputId, shouldFocusOnChange, shouldRevert) {
                labelToInput(labelId, inputId, shouldFocusOnChange, shouldRevert);
            }
        }
    }();