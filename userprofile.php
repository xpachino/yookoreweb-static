<!DOCTYPE html>
<html ng-app="asideApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/onboard.css" rel="stylesheet" type="text/css">
<link href="css/profile2.css" rel="stylesheet" type="text/css">
<link href="css/userprofile.css" rel="stylesheet" type="text/css">
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
<link href="css/pix-modal.css" rel="stylesheet" type="text/css">
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
<script>
$(document).ready(function () {
    $('.thumbnail').hover(function () {
        $(this).find('.caption').slideDown(250); //.fadeIn(250)
    }, function () {
        $(this).find('.caption').slideUp(250); //.fadeOut(205)
    });
});
</script>
<!--new scritp ends-->
</head>

<body ng-controller="MainCtrl">
<?php require("includes/head.php") ?>
<!--container ends-->
</div>
<div class="container">
<div class="row">
<?php require("includes/cover-profile.php") ?>
</div>
<div class="row xtra-pad">
<!--left column-->
<!--announcement bar
<div class="col-sm-cards">	
        	<div class="col-sm-cards-header">
            <div class="col-sm-padding">
            	<div class="col-sm-cards-about-title"><span class="span-about"><img src="img/icons/profile.png" width="18" height="18"></span>About</div>
            	<div class="col-sm-label">X</div>
                <div class="clear"></div>
             </div>
        </div>
        <div class="col-sm-cards-body">here</div>
 </div>
<!--about user ends-->
	 <div class="col-lg-3 col-md-3 col-sm-3 left-col">
<!--about user starts-->
<div class="col-sm-cards">	
        	<div class="col-sm-cards-header">
            <div class="col-sm-padding">
            	<div class="col-sm-cards-about-title"><span class="span-about"><img src="img/icons/profile.png" width="18" height="18"></span>About</div>
            	<div class="col-sm-label">Edit</div>
                <div class="clear"></div>
             </div>
        </div>
        <div class="col-sm-cards-body">
        	<div class="list-group" style="margin-bottom:5px;">
              <a href="#" class="list-group-item active" style="padding:3px 35px; background-image:url(img/icons/location.png); background-repeat:no-repeat; background-position: 3% 50%;">
                <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">South Africa</span>
                <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Lives in Randburg</p>
              </a>
            </div>
            <div class="list-group" style="margin-bottom:5px;">
               <a href="#" class="list-group-item" style="padding:3px 35px; background-image:url(img/icons/friends.png); background-repeat:no-repeat; background-position: 3% 50%;">
                <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">Gender</span>
                <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Male</p>
              </a>
            </div>
            <div class="list-group" style="margin-bottom:5px;">
               <a href="#" class="list-group-item" style="padding:3px 35px; background-image:url(img/icons/like.png); background-repeat:no-repeat; background-position: 3% 50%;">
                <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">Relationship Status</span>
                <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Married</p>
              </a>
            </div>
            <div class="list-group" style="margin-bottom:5px;">
               <a href="#" class="list-group-item" style="padding:3px 35px; background-image:url(img/icons/tag.png); background-repeat:no-repeat; background-position: 3% 50%;">
                <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">Interest</span>
                <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Movies - Sports - Travel</p>
              </a>
            </div>
<!--content body ends-->
        </div>
 </div>
<!--about user ends-->
     <!--user details-->
   	   <div class="col-sm-cards" id="myAlert">	
        	<div class="col-sm-cards-header">
            <div class="col-sm-padding">
            	<div class="col-sm-cards-about-title"><span class="span-about"><img src="img/icons/profile.png" width="18" height="18"></span>Friends</div>
            	<div class="col-sm-label"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
                <div class="clear"></div>
             </div>
        </div>
        <div class="col-sm-cards-body">
        	 <!--friend1 starts-->
            <div class="friends-wrapper">
           	<div class="row">
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-1.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-2.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-4.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/woman-3.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-1.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-4.jpg">
      </div>
   </div>
   <div style="padding:10px 0 0 0;">
        	<a href="#"><span><img style="margin-right:4px;" src="img/icons/friends.png" width="12"></span>View More</a>
        </div>
</div>
            </div>
        	<!--friend1 ends-->
        </div>
       </div>
    <!--Photos starts-->
   	   <div class="col-sm-cards" id="myAlert">	
        	<div class="col-sm-cards-header">
            <div class="col-sm-padding">
            	<div class="col-sm-cards-about-title"><span class="span-about"><img src="img/icons/photo.png" width="18" height="18"></span>Photos</div>
            	<div class="col-sm-label"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
                <div class="clear"></div>
             </div>
        </div>
        <div class="col-sm-cards-body">
        	 <!--friend1 starts-->
            <div class="friends-wrapper" style="border-bottom:0px; padding-bottom:0px;">
           	<div class="row">
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-1.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-2.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-4.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/woman-3.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      <div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/guy-4.jpg">
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mp-less-pad-xs">
      <div class="thumbnail">
      	<div class="caption">
                 <h4 style="padding:10px 0; font-weight:700;">Abayomi Peter</h4>
                <a  href="" class="add-photo-button">View</a>
            </div>
         <img src="img/people/woman-3.jpg">
      </div>
   </div>
</div>
            </div>
        	<!--photos ends-->
        </div>
       </div>
     </div>
<!--left column ends-->
<!--middle column starts-->
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-col">
<!--status update card-->
<?php require("includes/status-update.php") ?>
<!--status update card ends-->
<!--activity card0 starts-->
     	<div class="activity-stream-wrapper">
        	<div class="activity-card">
    <!--activity header starts-->
            <div class="activity-header">
            	<div class="content-owner-pix"><img src="img/pix.png" width="100%"></div>
                <div class="content-owner-wrapper">
                	<div class="content-owner-name">Paul Imisi</div>
                    <div class="activity-verb">uploaded a new video</div>
                </div>
                <div class="status-update-timestamp">2hours ago</div>
            <div class="clear"></div>
            </div>
   <!--activity header stops-->
   <!--Photo in post-->
   			<div class="photo-in-post-wrapper">
   				<div class="photo-in-status-update embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UFYIsryxaSM?list=PL2cdIMMc473hMLjtxan9kuoLgiIILQfMW" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="text-content">
            The project "Women For Change Initiative" was established in 2010 to sensitise, empower and mobilise women to participate actively in governance.
			</div>
            <!--content stats-->
            <div class="content-stats-wrapper">
            	<div class="content-stats">82 Likes <span style="margin:0 5px" class="glyphicon glyphicon-asterisk"></span>14 Comments</div>
                <div class="more-content"><img src="img/icons/more.png" width="40" ></span></div>
            	<div class="clear"></div>
            </div>
            <!--interactin bar-->
            <div class="interaction-bar">
            	<ul class="list-inline">
                    <li><span><img src="img/icons/like.png" width="18" ></span> Like</li>
                    <li><span><img src="img/icons/comment.png" width="18" ></span> Comment</li>
                    <li><span><img src="img/icons/share.png" width="18" ></span> Share</li>
            	</ul>
            </div>
            <!--comment section-->
            <!--comment card1-->
            <div class="comment-wrapper">
            	<div class="comment-card">
                	<div class="comment-owner-pix"><img src="img/pix.jpg" width="100%"></div>
                    <div class="comment-details">
                    	<div class="comment-owner-name">Paul Imisi</div>
                        <div class="comment-text">She has struggled relentlessly to awaken and empower the Nigerian woman through her various summits,</div>
                    </div>
                <div class="clear"></div>
                </div>
                <div class="comment-socials"><span><img src="img/icons/like.png" width="18" ><br>15</span></div>
            <div class="clear"></div>
            </div>
            <!--post comment-->
            <div class="post-comment-wrapper">
            	<div class="comment-owner-pix"><img src="img/pix.jpg" width="100%"></div>
                <div class="post-comment-form-wrap">
               	<div class="post-comment-card">
                	 <div class="post-comment-form">
                      <textarea rows="1" placeholder="Add a comment"></textarea>
                	</div>
                     <div class="add-comment-socials">
                    <img src="img/icons/location.png" width="18" ><img src="img/icons/photo-grey.png" width="18" >
                    </div>
                <div style="clear:left;"></div>
                </div>
                <div class="press-enter">Press enter to post comment</div>
              </div>
            <div class="clear"></div>
            </div>
            <!--post comment ends-->
            <div class="more-comments">See 25 more</div>
            </div>
        </div>
<!--activity card0 ends-->
<?php require("includes/blog_post.htm"); ?>
     </div>
<!--middle column ends-->
<!--right column starts-->
     <div class="col-lg-3 col-md-3 col-sm-3 right-col">
      <!--suggested friends-->
   	   <div class="col-sm-cards" id="myAlert">	
        	<div class="col-sm-cards-header">
            <div class="col-sm-padding">
            	<div class="col-sm-cards-about-title"><span class="span-about"><img src="img/icons/blogs.png" width="18" height="18"></span>Blogs</div>
            	<div class="col-sm-label"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
                <div class="clear"></div>
             </div>
        </div>
        <div class="col-sm-cards-body" style="padding-top:7px;">
        	 <!--friend1 starts-->
            <div class="friends-wrapper" style="border-bottom:0px; padding-bottom:0;">
                <div class="row">
                <!--blog post card1-->
    				<div class="blog-card">
                            <div class="comment-card">
                                <div class="comment-owner-pix-xs"><img src="img/pix.jpg" width="100%"></div>
                                <div class="comment-details-xs">
                                    <div class="comment-owner-name-xs">This is my blog title: what a day!!!</div>
                                    <div class="comment-text" style="font-size:12px;">She has struggled relent...</div>
                                </div>
                            <div class="clear"></div>
                            </div>
                            <div class="comment-socials"><span><img src="img/icons/delete.png" width="12" ></span></div>
                        <div class="clear"></div>
                   </div>
                    <!--blog post card1 ends-->
                     <!--blog post card2-->
    				<div class="blog-card">
                            <div class="comment-card">
                                <div class="comment-owner-pix-xs"><img src="img/pix.jpg" width="100%"></div>
                                <div class="comment-details-xs">
                                    <div class="comment-owner-name-xs">This is my blog title: what a day!!!</div>
                                    <div class="comment-text" style="font-size:12px;">She has struggled relent...</div>
                                </div>
                            <div class="clear"></div>
                            </div>
                            <div class="comment-socials"><span><img src="img/icons/delete.png" width="12" ></span></div>
                        <div class="clear"></div>
                   </div>
                    <!--blog post card2 ends-->
                    <!--blog post card3-->
    				<div class="blog-card">
                            <div class="comment-card">
                                <div class="comment-owner-pix-xs"><img src="img/pix.jpg" width="100%"></div>
                                <div class="comment-details-xs">
                                    <div class="comment-owner-name-xs">This is my blog title: what a day!!!</div>
                                    <div class="comment-text" style="font-size:12px;">She has struggled relent...</div>
                                </div>
                            <div class="clear"></div>
                            </div>
                            <div class="comment-socials"><span><img src="img/icons/delete.png" width="12" ></span></div>
                        <div class="clear"></div>
                   </div>
                    <!--blog post card3 ends-->
                </div>
            </div>
        	<!--friend1 ends-->
        </div>
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