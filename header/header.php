<!DOCTYPE html>
<html ng-app="asideApp">
<head>
    <link data-require="bootstrap-css@3.0.2" data-semver="3.0.2" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://rawgit.com/dbtek/angular-aside/master/dist/css/angular-aside.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="header.css" />
    <script src="https://code.angularjs.org/1.2.21/angular.js"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-0.11.0.min.js"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.11.0.min.js"></script>
    <script src="https://rawgit.com/dbtek/angular-aside/master/dist/js/angular-aside.js"></script>
    <script>
    angular.module('asideApp', ['ui.bootstrap', 'ngAside'])
  .controller('MainCtrl', function($scope, $aside) {
    var asideInstance = $scope.openAside = function openAside(position) {
      $aside.open({
        placement: position,
        templateUrl: 'aside.html',
        size: 'lg'
      }); 
    };
  });
    </script>
<meta charset="utf-8">
  </head>

  <body ng-controller="MainCtrl">
  <div class="top-header-bar navbar-fixed-top">
<div class="container">
<!--mobile menu and logo section-->
    <div class="top-header-logo">
  		<div class="show-xs">
        <button type="button" class="btn nav-menu btn-lg" ng-click="openAside('left')">
           <span><img src="../img/icons/menu.png" width="30" height="32"></span>
        </button>
       </div>
       <a class="navbar-brand show-lg" href="#"><img src="../img/main-logo.png" width="126" height="35"></a>
    </div>
<!--mobile menu and logo section ends-->
<!--top header icons starts-->
<ul class="nav navbar-nav">
          <li><a href="#"><span class="nav-icon"><img src="../img/icons/pv-white.png" width="24" ></span></a></li>
          <li><a href="#"><span class="nav-icon"><img src="../img/icons/blog-white.png" width="22" ></span></a></li>
          <li><a href="#"><span class="nav-icon"><img src="../img/icons/friends-white.png" width="24" ></span></a></li>  
</ul>
<!--top header icons ends-->
<!--menu -right starts-->
<ul class="nav navbar-nav navbar-right show-lg" style="float:right;">
          <li><span class="top-profile-pix-img"><img src="../img/people/guy-4.jpg" width="100%"></span></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#fff;">Paul<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Message</a></li>
            <li><a href="#">Profile</a></li>
            <li class="divider"></li>
            <li><a href="#">Create a Page</a></li>
            <li class="divider"></li>
            <li><a href="#">Create ad</a></li>
            <li class="divider"></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
        </ul>
<!--menu right ends-->
<!--search form-->
<form class="navbar-form navbar-right show-search" role="search">
         <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" ng-model="search.terms">
        <button class="btn btn-default search-button" type="button" ng-click="searchfn()"><span class="glyphicon glyphicon-search"></span></button>
        </div>
      </form>
<!--search form ends-->

    </div>
<!--container ends-->
</div>
<!--//top-header-bar ends-->
</body>

</html>