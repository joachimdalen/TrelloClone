/**
 * Created by Dev on 29.12.2016.
 */
var initBoardScripts = function() {
    Board.init();
    CardModal.init();
}, Registrator = function () {
    "use strict";
    return {
        initBoard: function () {
            initBoardScripts();
        }
    }
}();