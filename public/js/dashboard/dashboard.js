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
            '\<img src="/img/board.png"></div><div class="dcard-content"><p class="sub-header no-italic sub-header-dark">' + data.name + '\</p></div></div>')
            .appendTo(container);
    }

}, Dashboard = function () {
    "use strict";
    return {
        init: function () {
            initDashboard();
        }
    }
}();