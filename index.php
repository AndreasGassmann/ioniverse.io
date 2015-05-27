<!DOCTYPE html>
<html ng-app="Ioniverse" lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Ioniverse.io</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,900,300' rel='stylesheet' type='text/css'>

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/lib/angular.min.js"></script>
    <script src="js/app.js"></script>

    <!-- Favicon
    <link rel="icon" type="image/png" href="images/favicon.png">
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</head>

<body ng-controller="MainCtrl">

<div class="section-header">
    <div class="container">
        <div class="one-half column">
            <h3 class="section-heading">Ioniverse.io</h3>
        </div>
    </div>
</div>

<div class="section-search">
    <div class="container">
        <input type="text" ng-model="search" placeholder="Search...">
    </div>
</div>

<div class="section">
    <div class="container">
        <h3>Links ({{ionicResources.length}})</h3>
        <div ng-repeat="item in ionicResources | filter: search" style="border-bottom: solid 1px #111111">
            <a ng-click="like(item)">Like</a> ({{item.likes}})
            <img ng-src="{{item.image}}" width="200"/>
            <a ng-click="linkClicked(item)" ng-href="{{item.url}}">{{item.name}}</a> ({{item.count}})<br />

        </div>
    </div>
</div>

<div class="section get-help">
    <div class="container">
        <h3>Add new link</h3>
        <form ng-submit="add()">
            <input type="text" ng-model="new.title" placeholder="Title"><br />
            <input type="text" ng-model="new.url" placeholder="URL"><br />
            <input type="number" ng-model="new.category_id" placeholder="Category ID"><br />
            <textarea placeholder="Description" ng-model="new.description"></textarea><br />
            <textarea placeholder="Tags" ng-model="new.tags"></textarea><br />
            <input type="text" ng-model="new.imageURL" placeholder="Image URL"><br />
            <input type="text" ng-model="new.videoURL" placeholder="Video URL"><br />
            <button class="button button-primary">Add</button>
        </form>
    </div>
</div>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
