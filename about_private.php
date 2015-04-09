<!DOCTYPE html>
<html ng-app="asideApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/onboard.css" rel="stylesheet" type="text/css">
<link href="css/profile2.css" rel="stylesheet" type="text/css">
<link href="css/my_photos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<title>User Profile</title>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--new scripts-->
<link rel="stylesheet" href="https://rawgit.com/dbtek/angular-aside/master/dist/css/angular-aside.min.css" />
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
<style>
.prof-list-wrap{padding:7px 0; margin-bottom:0px; border-bottom:1px solid #ddd;}
</style>
</head>

<body class="about_private" ng-controller="MainCtrl">
<?php require("includes/head.php") ?>
<!--container ends-->
<div class="container">
<div class="row">
<?php require("includes/cover-profile.php") ?>
</div>
<div class="row xtra-pad">
<!--left column-->
	 <div class="col-lg-3 col-md-3 col-sm-3 left-col">
     <!--user details-->
   	   <!--side menu-->
     	<div class="side-menu-wrapper" style="background:none !important;">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <span class="list-group-icons"><img src="img/icons/profile.png" width="18"></span> Overview</a>
            <a href="#" class="list-group-item disabled">
                <span class="list-group-icons"><img src="img/icons/photo.png" width="18"></span>Work Experience</a>
            <a href="#" class="list-group-item disabled">
                <span class="list-group-icons"><img src="img/icons/blogs.png" width="18"></span>Places You've Lived</a>
            <a href="#" class="list-group-item disabled">
                <span class="list-group-icons"><img src="img/icons/video.png" width="18"></span>Contact and Basic Info</a>
            <a href="#" class="list-group-item disabled">
                <span class="list-group-icons"><img src="img/icons/friends.png" width="18"></span>Family and Relationships</a>
            <a href="#" class="list-group-item disabled"><span class="list-group-icons"><img src="img/icons/pgs.png" width="18"></span>Details About You</a>
            <a href="#" class="list-group-item disabled"><span class="list-group-icons"><img src="img/icons/grp.png" width="18"></span> Life Events</a>
        </div>
        </div>     
     <!--blogs-->
     </div>
<!--left column ends-->
<!--middle column starts-->
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-col">
     	<div class="activity-stream-wrapper">
        <!--content header-->
        	<div class="content-header">
                <div class="header-inner">
                  <h2 style="float:left;"><span class="list-group-icons"><img src="img/icons/prof.png" width="25"></span>About</h2>
                  <a href="profile-edit.php"><div class="col-sm-label"><span style="margin-right:5px;"><img src="img/icons/halflings-61-pencil.png"></span>Edit</div></a>
                  <div class="clear"></div>
                </div>
          </div>
         <!--content body starts-->
         <div class="content-body">
         <!--upload picture starts-->
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 offset-padding add-margin-bottom">
        	<div class="prof-list-wrap">
            	<span style="margin-right:5px;"><img src="img/icons/halflings-4-envelope.png"></span>xpaxchino@oneil.com
            </div>
            <div class="prof-list-wrap">
            	<span style="margin-right:5px;"><img src="img/icons/halflings-109-calendar.png"></span>November 26, 1960
            </div>
            <div class="prof-list-wrap">
            	<span style="margin-right:5px;"><img src="img/icons/person.png"></span>Male
            </div>
            <div class="prof-list-wrap">
            	<span style="margin-right:5px;"><img src="img/icons/halflings-5-heart.png"></span>Married
            </div>
            <div class="prof-list-wrap">
            	<span style="margin-right:5px;"><img src="img/icons/halflings-62-map-marker.png"></span>Live in Randburg; Jo'Burg.
            </div>
             <div class="prof-list-wrap">
            	<span style="margin-right:5px;"><img src="img/icons/religion.png"></span>Christian
            </div>
            <div class="prof-list-wrap">
            	<span style="margin-right:5px;"><img src="img/icons/interest.png"></span>Interestd in: <span style="color:#06C">Football, Travel, Reading</span>
            </div>
            <div class="prof-list-wrap">
            	<span style="margin-right:5px;"><img src="img/icons/halflings-139-briefcase.png"></span>
                When it comes to selling online, the first question that does(and should) come to mind is what to sell online! It's quite probably the hardest part of starting a store, ...
            </div>
        </div>
        <!--upload picture ends-->
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-pad-control">
             <div class="field-row">
                <div class="btn add-photo-button">
                    <span style="margin-right:5px;"><img src="img/icons/halflings-139-briefcase.png"></span>Add WorkPlace
                </div>
            </div>
             <div class="field-row">
                <div class="btn add-photo-button">
                    <span style="margin-right:5px;"><img src="img/icons/halflings-98-plus.png"></span>Add Contact Info
                </div>
            </div>
            <div class="field-row">
                <div class="btn add-photo-button">
                    <span style="margin-right:5px;"><img src="img/icons/halflings-98-plus.png"></span>Add Family/Relationships
                </div>
            </div> 
        </div>
    <div class="clear"></div>
    <!--update profile details ends-->   
         </div>
         <!--content body starts-->
        </div>
<!--activity card00 ends-->
     </div>
<!--middle column ends-->
<!--right column starts-->
     <div class="col-lg-3 col-md-3 col-sm-3 right-col"> 
     <!--blogs-->
     <div class="col-sm-cards">
        </div>
     	<div class="advert-wrapper">
        	<div class="ad-section-header">
            	<div class="sponsored-title">sponsored</div>
                <div class="create-ad-link">Create Ad</div>
            	<div class="clear"></div>
            </div>
            <!--ad card begins-->
            <div class="ad-card">
            	<div class="ad-image"><img src="img/uploads/rado.png" width="100%" ></div>
                <div class="ad-title">Timeless pieces from $120!</div>
                <div class="ad-link">www.buyright.co.za</div>
                <div class="ad-description">Loafers are arguable the best quality footwear that makes your feet stand out! Shop our wi...</div>
            </div>
            <!--ad card ends-->
        </div>
     </div>
<!--right column ends-->
<div class="clear"></div>
</div>
<div class="footer"></div>
</div>
<script type='text/javascript'>//<![CDATA[ 

var myApp = angular.module('myApp', ['ui.bootstrap']);

//myApp.directive('myDirective', function() {});
//myApp.factory('myService', function() {});

function MyCtrl($scope) {
    $scope.name = 'Superhero';
}
//]]>  

</script>
<script type="text/javascript">
var resizeTextarea = function() {
    this.style.height = "";

    var
        $this = $(this),            
        outerHeight = $this.outerHeight(),
        scrollHeight = this.scrollHeight,
        innerHeight = $this.innerHeight(),
        magic = outerHeight - innerHeight;
    this.style.height = scrollHeight + magic + "px";
};
$('textarea')
    .keydown(resizeTextarea)
    .keyup(resizeTextarea)
    .change(resizeTextarea)
    .focus(resizeTextarea);
</script>
<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
<div class="template-upload fade">
{% for (var i=0, file; file=o.files[i]; i++) { %}
		<ul class="ul-thumbnail">
        <li class="list-thumbnail">
		<div class="preview" style="position:relative;">
			<div style="position:absolute; top:0; right:0;">
			{% if (!i) { %}
                <button class="delete-pix cancel">
                </button>
            {% } %}
			</div>
		</div>
		{% if (!i) { %}
<button class="invisible-button start" disabled>
</button>
{% } %}
        </li>
		</ul>
{% } %}
</div>
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
<!--<div style="text-align:center;">Upload Successful</div> -->
{% { %}
    <div class="template-download fade">
        
    </div>
{% } %}

</script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
</body>
</html>