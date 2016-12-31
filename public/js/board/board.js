/**
 * Created by Dev on 28.12.2016.
 */
var initBoard = function () {
    console.log('Loaded board.js');
    $(".list-item").click(function () {
        /*    var newCard = $('#newCard');
         var listItem = document.createElement('div');
         listItem.clas*/

    });
    $(".new-list").on('click', function () {
        var newList = $('#newList');
        var addedList = $('\<div class="list"><div class="list-container"><div class="list-header">This is my list' +
            '\</div><div class="list-item-container"><div class="new-card"><a id="newModalTrigger">Add new card...' +
            '\</a></div></div></div></div>')
            .insertBefore(newList);
    });
    $(document).on('click', '.new-card', function () {
        var newCard = $('#newCard');
        var addedCard = $('\<div class="list-item"><div class="item-card"><div class="card-id-container">' +
            '#1000\</div><div class="card-label-container"></div><div class="card-content"> ' +
            'Fix divs in container to lign up with each other. \</div> <div class="card-footer"></div></div></div>')
            .insertBefore(this);
        console.log('ehhh...');
    });
    $("#show-menu").on('click', function () {
        var menu = $('#side-menu');
        var menuButton = $('#show-menu');
        if (menu.is(":visible")) {
            menu.hide();
            console.log(menuButton);
            menuButton.text('Show menu');
            console.log('yep');
        }
        else {
            menu.show();
            menuButton.text('Hide menu');
            //  menu.focus();
        }
    });
    $(document).ready(function () {
        $('#side-menu').hide();
    });
    $('#side-menu').blur(function () {
        $('#side-menu').hide();
    });
    /* Dummuy daya*/
    function addList(listData) {
        var newList = $('#newList');
        var addedList = $('\<div class="list"><div class="list-container"><div class="list-header">' + listData.name +
            '\</div><div class="list-item-container"><div class="new-card" id="newCard"><a id="newModalTrigger">Add new card...' +
            '\</a></div></div></div></div>')
            .insertBefore(newList);
        $.each(listData.cards, function (index) {
            addCards(listData.cards[index], addedList);
        });

    }

    function addCards(cardData, parentList) {
        var newCard = parentList.find('#newCard');
        var addedCard = $('\<div class="list-item"><div class="item-card"><div class="card-id-container">' +
            '#1000\</div><div class="card-label-container"></div><div class="card-content"> ' + cardData.name + '\</div> <div class="card-footer"></div></div></div>')
            .insertBefore(newCard);
    }

    $(document).ready(function () {
        $.ajax({
            url: "http://localhost:8001/v1/boards/dummy"
        }).then(function (data) {
            $.each(data.lists, function (index) {
                addList(data.lists[index]);
            });
        });
    });

    /* Dummy data end*/
}, Board = function () {
    "use strict";
    return {
        init: function () {
            initBoard();
        }
    }
}();