/**
 * Created by Dev on 30.12.2016.
 */
var initDashboard = function () {
    $(document).on('click', '.dashboard-card', function (e) {
        console.log(e.target.classList);
        if (e.target.classList.contains('nolink')) {
            return;
        }
       // window.location.replace("http://localhost:8000/b/0b3e6c9a-8c7f-48b2-93a0-be18fc85a949");
    })
}, Dashboard = function () {
    "use strict";
    return {
        init: function () {
            initDashboard();
        }
    }
}();