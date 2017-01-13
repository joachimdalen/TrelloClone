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

            if ($(input).val() != $(label).text()) {
                $(label).text($(input).val());
            }

        });
    }
};
var labelToInputLists = function (labelId, inputId, shouldFocusOnChange, shouldRevert) {
    $(document).on('click', "#" + labelId, function () {
        var input = $(this).parent().find("#" + inputId);
        $(this).css("display", "none");
        $(input).css("display", "block");
        if (shouldFocusOnChange) {
            input.focus();
        }
    });
    if (shouldRevert) {
        $(document).on("focusout", "#" + inputId, function () {
            var input = $(this);
            var label = $(this).parent().find("#" + labelId);
            $(label).css("display", "block");
            $(input).css("display", "none");
            if ($(input).val() != $(label).text()) {
                $(label).text($(input).val());
            }

        });
    }
};
var copyToInput = function (labelId, inputId) {
        $(document).ready(function () {
            $('#' + inputId).val($('#' + labelId).text());
        });
    },
    ControlRegistry = function () {
        "use strict";
        return {
            labelToInput: function (labelId, inputId, shouldFocusOnChange, shouldRevert) {
                labelToInput(labelId, inputId, shouldFocusOnChange, shouldRevert);
            },
            labelToInputLists: function (labelId, inputId, shouldFocusOnChange, shouldRevert) {
                labelToInputLists(labelId, inputId, shouldFocusOnChange, shouldRevert);
            },
            copyToInput: function (labelId, inputId) {
                copyToInput(labelId, inputId)
            }
        }
    }();