TaskList.controller('dashboardController', function ($scope, $http) {
    $scope.boards = null;
    $scope.contentLoaded = false;
    $scope.init = function () {
        $scope.loadboards();
    };

    $scope.loadboards = function () {
        $http({
            method: 'GET',
            url: '/boards/short'
        }).then(
            function success(response) {
                $scope.boards = response.data;
                /*         angular.forEach($scope.boards, function (list) {
                 list.showListMenu = false;
                 });*/
                $scope.contentLoaded = true;
                //   console.log(response.data);
            },
            function failed(response) {
                $scope.contentLoaded = false;
            }
        );
    };

    $scope.submitNewBoard = function () {
        if ($scope.boardName) {
            $http({
                method: 'POST',
                url: '/boards/new',
                data: {
                    name: $scope.boardName,
                    description: ''
                }
            }).then(
                function success(response) {
                    $scope.boards.push(response.data);
                },
                function failed(response) {
                    console.log(response);
                }
            );
        }
    };

});
