TaskList.controller('boardController', function ($scope, $http) {
    $scope.lists = null;
    $scope.contentLoaded = false;
    $scope.currentCard = null;
    $scope.currentList = null;
    $scope.currentBoard = "JO8O8UGexbJwP9rH";
    $scope.showMenu = false;
    $scope.showMenuText = "Show Menu";
    $scope.showListMenu = false;
    $scope.isCreatingList = false;
    $scope.newCardTitle = '';
    $scope.init = function () {
        $scope.loadLists();
    };
    $scope.viewListMenu = function (list) {
        list.showListMenu = list.showListMenu == false;
    };
    $scope.toggleMenu = function () {
        if ($scope.showMenu == false) {
            $scope.showMenu = true;
            $scope.showMenuText = "Hide Menu";
        }
        else {
            $scope.showMenu = false;
            $scope.showMenuText = "Show Menu";
        }
    };
    $scope.modalClose = function () {
        //$scope.modal = $('#editCardModal');
        $scope.modal.hide();
    };

    $scope.loadLists = function () {
        $scope.contentLoaded = false;
        $http({
            method: 'GET',
            url: '/lists/JO8O8UGexbJwP9rH'
        }).then(
            function success(response) {
                $scope.lists = response.data;
                angular.forEach($scope.lists, function (list) {
                    list.showListMenu = false;
                    list.isCreatingCard = false;
                    list.isRenaming = false;
                });
                $scope.contentLoaded = true;
                //   console.log(response.data);
            },
            function failed(response) {
                $scope.contentLoaded = false;
            }
        );
    };

    /* LISTS*/
    $scope.addList = function () {
        /* $scope.modal = $('#newListModal');
         $scope.modal.show();*/
        $scope.isCreatingList = true;
    };
    $scope.cancelAddList = function () {
        $scope.isCreatingList = false;
    };
    $scope.cancelAddCard = function (list) {
        list.isCreatingCard = false;
    };
    $scope.submitNewList = function () {
        console.log('we hit this');
        if ($scope.listTitle) {
            $http({
                method: 'POST',
                url: '/lists/new',
                data: {
                    board_id: $scope.currentBoard,
                    name: $scope.listTitle
                }
            }).then(
                function success(response) {
                    response.data.cards = [];
                    $scope.lists.push(response.data);
                    /* $scope.modal.hide();*/
                    $scope.listTitle = '';
                    $scope.isCreatingList = false;
                },
                function failed(response) {
                    $scope.contentLoaded = false;
                    console.log(response);
                }
            );
        }
    };
    $scope.rename = function (list) {
        list.isRenaming = true;
    };
    $scope.cancelRename = function (list) {
        list.isRenaming = false;
    };
    $scope.submitRename = function (list) {
        if (list.name) {
            $http({
                method: 'POST',
                url: '/lists/rename',
                data: {
                    list_id: list.list_id,
                    name: list.name
                }
            }).then(
                function success(response) {
                    list.isRenaming = false;
                },
                function failed(response) {
                    console.log(response);
                }
            );
        }
    };
    /* CARDS */
    $scope.addCard = function (list) {
        console.log('okay');
        /* $scope.viewListMenu(list);
         $scope.modal = $('#newCardModal');
         $scope.currentList = list;
         $scope.modal.show();*/
        list.isCreatingCard = true;
    };
    $scope.showCard = function (card, list) {
        //   $scope.showEditModal = true;
        $scope.modal = $('#editCardModal');
        $scope.currentCard = card;
        $scope.currentList = list;
        $scope.modal.show();
    };
    $scope.showNewCard = function (list) {
        $scope.modal = $('#newCardModal');
        $scope.currentList = list;
        $scope.modal.show();
    };
    $scope.submitNewCard = function (list) {
        if (list.cardTitle) {
            $http({
                method: 'POST',
                url: '/lists/cards/new',
                data: {
                    list_id: list.list_id,
                    name: list.cardTitle
                }
            }).then(
                function success(response) {
                    list.cards.push(response.data);
                    list.isCreatingCard = false;
                    list.cardTitle = '';
                },
                function failed(response) {
                    console.log(response);
                }
            );
        }
    }
});