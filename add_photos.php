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
<title>Add Photos</title>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
<!--new scritp ends-->
</head>

<body class="my_photos_in" ng-controller="MainCtrl">
<?php require("includes/head.php") ?>
<!--container ends-->
<div class="container">
<div class="row">
<?php require("includes/cover-profile.php") ?>
</div>
<div class="row xtra-pad">
<!--left column-->
	 <div class="mp-left-col">
     <!--user details-->
   	   <!--side menu-->
     	<div class="side-menu-wrapper" style="background:none !important;">
        <div class="list-group">
            <a href="my_photos.php" class="list-group-item"><span class="list-group-icons"><img src="img/icons/blogs.png" width="18"></span>Albums</a>
            <a href="my_photos_pu.php" class="list-group-item"><span class="list-group-icons"><img src="img/icons/profile.png" width="18"></span> Photos of You</a>
            <a href="my_photos_in.php" class="list-group-item active"><span class="list-group-icons"><img src="img/icons/photo.png" width="18"></span>Your Photos</a>
        </div>
        </div> 
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
     <!--blogs-->
     </div>
<!--left column ends-->
<!--right column starts-->
<div class="mp-right-col">
<div class="mp-view-header">
    <div style="padding:0px 0px;">
    	<span style="font-size:22px; font-weight:700;"><span><img style="margin-right:7px;" src="img/icons/photox.png" width="30"></span>My Photos</span>
        <div style="padding:10px 0 0 0;">
        	<a href="create-album.php"><span><img style="margin-right:4px;" src="img/icons/photo.png" width="12"></span>Create Album</a> · <a href="add_photos.php" style="text-decoration:underline;"><span><img style="margin-right:4px;" src="img/icons/photo-grey.png" width="14"></span>Add Photos</a> · <a href="#"><span><img style="margin-right:4px;" src="img/icons/video.png" width="14"></span>Add Video</a>
        </div>
    </div>
</div>
<!--mp-view-header ends-->
<div style="padding:15px;">
<div class="row">
 
     	<div class="status-update-wrapper">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="photo">
          <div class="status-update-form-wrapper">
            	<textarea rows="1" class="update-status" placeholder="Write something..."></textarea>
          </div>
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="drag-drop-photo">Drag and drop files to upload<br>OR<br>
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn add-photo-button fileinput-button">
        <span class="add-photo-button-icon">Add Photos...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
    </div>
        <!-- The table listing the files available for upload/download -->
        <div role="presentation" style="padding:0 5px 0px; text-align:center;">
        <div class="files">
        </div>
        <div class="clear"></div>
        <div class="row fileupload-buttonbar">
        <div class="post-photo-bottom">
        	<button type="submit" class="post-update-button start">Upload</button>
            <div class="clear"></div> 
        </div>
        </div>
        </div>
    </form>
          </div>
           

        </div> 
        </div>

</div>
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