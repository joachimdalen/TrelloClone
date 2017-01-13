/**
 * Created by Dev on 30.12.2016.
 */
var initDashboard = function () {
    /*    $(document).on('click', '.dashboard-card', function (e) {
     console.log(e.target.classList);
     if (e.target.classList.contains('nolink')) {
     return;
     }
     // window.location.replace("http://localhost:8000/b/0b3e6c9a-8c7f-48b2-93a0-be18fc85a949");
     });*/
    $(document).ready(function () {
        //   console.log(window.location.pathname);
        $.ajax({
            url: "http://localhost:8001/v1/boards/1234/short"
            //  body: "{userToken:thisismytoken,userId:1234}"
        }).then(function (data) {
            $.each(data.boards, function (index) {
                addBoards(data.boards[index]);
            });
            console.log(data);

        })
    });
    function addBoards(data) {
        var container = $('#dashboard-container');
        var addedCard = $('\<div class="dashboard-card"' + " onclick=location.href='/b/" + data.slug + "';" + '\ style="cursor: pointer;"><div class="dcard-title"><span>' + data.name + '\</span>' +
            '\<img src="/img/board.png"></div><div class="dcard-content"><p class="sub-header no-italic sub-header-dark">' + data.description + '\</p></div></div>')
            .appendTo(container);
    }

    $("#newBoardForm").submit(function (event) {
        console.log('submitting');
        // Stop form from submitting normally
        event.preventDefault();
        // Get some values from elements on the page:
        var $form = $(this),
            boardName = $form.find("input[name='boardName']").val(),
            boardDescription = $form.find("textarea[name='boardDescription']").val(),
            url = $form.attr("action");

        // Send the data using post
        var posting = $.post(url, {boardName: boardName, boardDescription: boardDescription, userToken: 'thisismytoken'})
                .done(function (data) {
                  /*  alert("second success " + data);
                    console.log(data);*/
                    var container = $('#dashboard-container');
                    var addedCard = $('\<div class="dashboard-card"' + " onclick=location.href='/b/" + data.slug + "';" + '\ style="cursor: pointer;"><div class="dcard-title"><span>' + data.name + '\</span>' +
                        '\<img src="/img/board.png"></div><div class="dcard-content"><p class="sub-header no-italic sub-header-dark">' + data.description + '\</p></div></div>')
                        .appendTo(container);
                    var modal = document.getElementById('newBoardModal').style.display = "none";
                })
                .fail(function (data) {
                    alert("error");
                 //   console.log(data);
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
    $("#submitNewBoard").on('click', function () {
        $("#newBoardForm").submit();
    });

}, Dashboard = function () {
    "use strict";
    return {
        init: function () {
            initDashboard();
        }
    }
}();