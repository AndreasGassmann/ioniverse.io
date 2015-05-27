var app = angular.module('Ioniverse', []);

app.controller('MainCtrl', function($scope, $http) {

    $http.get('/action.php?action=list').
        success(function(data, status, headers, config) {
            $scope.ionicResources = data;
        }).
        error(function(data, status, headers, config) {
            // todo: error message
        });

    $scope.new = {};

    $scope.linkClicked = function(item) {
        console.log(item.id);
        $http.post('/action.php', {
            action: 'click',
            id: item.id
        }).success(function(data, status, headers, config) {
            item.count++;
        });
    };

    $scope.add = function() {
        $http.post('/action.php', {
            action: 'add',
            title: $scope.new.title,
            url: $scope.new.url,
            category_id: $scope.new.category_id,
            description: $scope.new.description,
            tags: $scope.new.tags,
            imageURL: $scope.new.imageURL,
            videoURL: $scope.new.videoURL
        })
            .success(function(data, status, headers, config) {
                $scope.new = {};
            })
            .error(function(data, status, headers, config) {
                // todo: error message
            });
    };

    $scope.like = function(item) {
        $http.post('/action.php', {
            action: 'like',
            id: item.id
        }).success(function(data, status, headers, config) {
            if (data == 'success') {
                item.likes++;
            }
        });
    };

    $scope.categories = [
        {
            name: "Ionic Basics",
            slug: "ionic-basics"
        }
    ];
});
