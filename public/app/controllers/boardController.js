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
        $scope.modal = $('#newListModal');
        $scope.modal.show();
    };
    $scope.submitNewList = function () {
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
                    $scope.lists.push(response.data);
                    $scope.modal.hide();
                },
                function failed(response) {
                    $scope.contentLoaded = false;
                    console.log(response);
                }
            );
        }
    };
    /* CARDS */
    $scope.addCard = function (list) {
        $scope.viewListMenu(list);
        $scope.modal = $('#newCardModal');
        $scope.currentList = list;
        $scope.modal.show();
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
    $scope.submitNewCard = function () {
        if ($scope.cardTitle) {
            $http({
                method: 'POST',
                url: '/lists/cards/new',
                data: {
                    list_id: $scope.currentList.list_id,
                    name: $scope.cardTitle
                }
            }).then(
                function success(response) {
                    console.log($scope.currentList);
                    $scope.currentList.cards.push(response.data);
                    $scope.modal.hide();
                },
                function failed(response) {
                    $scope.contentLoaded = false;
                    console.log(response);
                }
            );
        }
    }
});