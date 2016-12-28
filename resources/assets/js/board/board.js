/**
 * Created by Dev on 28.12.2016.
 */
console.log('Loaded board.js');
$(".list-item").click(function () {
    console.log(this);
});
$(".new-list").click(function () {
    var newList = $('#newList');
    var addedList = $('\<div class="list">\<div class="list-container"><div class="list-header">' +
        'This is my list\</div><div class="list-item-container"><div class="list-item">' +
        '\<div class="new-card"><a>Add new card...</a></div></div></div></div></div>')
        .insertBefore(newList);
});
$(".new-card").click(function () {
    var newCard = $('#newCard');
    var addedCard = $('\<div class="list-item"><div class="item-card"><div class="card-id-container">' +
        '#1000\</div><div class="card-label-container"></div><div class="card-content"> ' +
        'Fix divs in container to lign up with each other. \</div> <div class="card-footer"></div></div></div>')
        .insertBefore(this);
});
$("#show-menu").click(function () {
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
  //  $('#side-menu').hide();
});
$('#side-menu').blur(function () {
   $('#side-menu').hide();
});