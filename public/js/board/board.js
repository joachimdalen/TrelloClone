/**
 * Created by Dev on 28.12.2016.
 */
var initBoard = function () {
        console.log('Loaded board.js');
        $(".list-item").click(function () {
            /*  var list = document.createElement('div').classList.add('list');
             var listContainer = document.createElement('div').classList.add('list-container');
             var listHeader = document.createElement('div').classList.add('list-header');
             var listItemContainer = document.createElement('div').classList.add('list-item-container');
             var newCard = document.createElement('div').classList.add('new-card');
             var trigger = document.createElement('a').setAttribute('id', 'newModalTrigger');
             //appendChild
             list.appendChild(listContainer);
             listContainer.appendChild(listHeader);
             listContainer.appendChild(listItemContainer);
             listItemContainer.appendChild(newCard);
             listItemContainer.appendChild(trigger);
             document.createElement('div').classList.add('list').appendChild(document.createElement('div').classList.add('list-container'))*/
        });
        $(".new-list").on('click', function () {
            var newList = $('#newList');
            //<div class="list-header"><a id="list-header-label">This is my list</a><input type="text" class="list-header" placeholder="List title" id="list-header-field" style="display: none;"></div>
            var addedList = $('\<div class="list"><div class="list-container"><div class="list-header"><a id="list-header-label">This is my list</a>' +
                '\<input type="text" class="list-header" placeholder="List title" id="list-header-field" style="display: none;"></div>' +
                '\<div class="list-item-container"><div class="new-card"><a id="newCardTrigger">Add new card...' +
                '\</a></div></div></div></div>')
                .insertBefore(newList);
        });
        /*$(document).on('click', '.new-card', function () {
         var newCard = $('#newCard');
         var addedCard = $('\<div class="list-item"><div class="item-card"><div class="card-id-container">' +
         '#1000\</div><div class="card-label-container"></div><div class="card-content"> ' +
         'Fix divs in container to lign up with each other. \</div> <div class="card-footer"></div></div></div>')
         .insertBefore(this);
         console.log('ehhh...');
         });*/
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
            var addedList = $('\<div class="list"><div class="list-container"><div class="list-header"><a id="list-header-label">' + listData.name +
                '\</a><input type="text" class="list-header" placeholder="List title" id="list-header-field" style="display: none;"></div><div class="list-item-container">' +
                '\<div class="new-card" id="newCard"><a id="newCardTrigger" data-listID="' + listData.slug + '">Add new card...' +
                '\</a></div></div></div></div>')
                .insertBefore(newList);
            $.each(listData.cards, function (index) {
                addCards(listData.cards[index], addedList);
            });

        }

        function addCards(cardData, parentList) {
            var newCard = parentList.find('#newCard');
            var addedCard = $('\<div class="list-item" data-cardID="' + cardData.tag + '"\><div class="item-card" id="editCardTrigger"><div class="card-id-container">' +
                '#1000\</div><div class="card-label-container" id="labelContainer"></div><div class="card-content"> ' + cardData.name + '\</div> <div class="card-footer"></div></div></div>')
                .insertBefore(newCard);
            $.each(cardData.labels, function (index) {
                addLabels(cardData.labels[index], addedCard);
                // console.log(cardData.labels[index]);
            });
        }

        function addLabels(labelData, parentCard) {
            var newLabel = parentCard.find('#labelContainer');
            var newSpan = $('\<span class="label label-green"></span>').css("background-color", labelData.color).text(labelData.tag);

            newSpan.appendTo(newLabel);
            //$("\<span class=\"label\" style=\"background-color:" + labelData.color + ">" + labelData.tag + "\</span>").appendTo(newLabel);
            /* console.log(labelData.color);
             console.log(labelData.tag);
             $('test').appendTo(newLabel);
             //  $("\<span class=\"label\" style=\"background-color:" + labelData.color + ">" + labelData.tag + "\</span>").appendTo(newLabel);
             console.log(newLabel);
             //var addedLabel = $('\<span class="label" style="background-color: ' + labelData.color + '>' + labelData.tag + '\</span>').append(newLabel);*/
        }

        $(document).ready(function () {
            $.ajax({
                url: "http://localhost:8001/v1/boards/dummy"
            }).then(function (data) {
                $.each(data.lists, function (index) {
                    addList(data.lists[index]);
                });
                console.log('added dummy board');

            })
        });

        /* Dummy data end*/
        $("#newCardForm").submit(function (event) {
            console.log('submitting');
            // Stop form from submitting normally
            event.preventDefault();

            // Get some values from elements on the page:
            var $form = $(this),
                term = $form.find("input[name='cardName']").val(),
                url = $form.attr("action");

            // Send the data using post
            var posting = $.post(url, {cardName: term})
                    .done(function (data) {
                        alert("second success " + data.newCardName);
                        //var modal = document.getElementById('newCardModal');
                        var modal = document.getElementById('newCardModal').style.display = "none";
                    })
                    .fail(function () {
                        alert("error");
                        $('#board-title').text('This is my board');
                    })
                /* .always(function () {
                 alert("finished");
                 })*/;

            console.log('we got to the posting');
            // Put the results in a div
            /*posting.done(function (data) {
             console.log(data);
             alert(data.newCardName);
             });*/
        });
        /*Form handlers*/
        $("#submitNewCard").on('click', function () {
            console.log('ok');
            $("#newCardForm").submit();
        });
        $($('#card-age')).on('click', function () {

            $('#card-age').css('display', 'none');
            $('#card-created').css('display', 'block');

        });
        $($('#card-created')).on('click', function () {

            $('#card-age').css('display', 'block');
            $('#card-created').css('display', 'none');

        })
    },
    Board = function () {
        "use strict";
        return {
            init: function () {
                initBoard();
            }
        }
    }();