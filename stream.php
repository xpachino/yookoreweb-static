<!DOCTYPE html>
<html class="easy-sidebar-active">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/onboard.css" rel="stylesheet" type="text/css">
<link href="css/profile2.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<link rel="stylesheet" href="css/bootstrap3_player.css">

<link href="css/easy-sidebar.css" rel="stylesheet" type="text/css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<title>Activity Stream</title>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/recordmp3.js"></script>
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
<!--newer scripts---->
<link href="css/pix-modal.css" rel="stylesheet" type="text/css">
<script src="js/mikes-modal.min.js" type="text/javascript"></script>
<script src="js/photo-modal.js" type="text/javascript"></script>
<!---newer scripts ends-->
</head>

<body ng-controller="MainCtrl"><!--please take not of the name-->
<?php require("includes/sidebar.html") ?>
<?php require("includes/head.php") ?>
<!--header ends-->
<div class="container">
<div class="offset-top-margin"></div>
<!--add the margin set off the fixed header-->
<div class="row xtra-pad">
<!--left column-->
	 <div class="col-lg-3 col-md-3 col-sm-3 left-col">
     <?php require("includes/stream-side-nav.html") ?>
     </div>
<!--left column ends-->
<!--middle column starts-->
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-col">
<!--status update card-->
<?php require("includes/status-update.php") ?>
<!--status update card ends-->
 <?php require("includes/photo-in-post.php") ?>
<!--activity card0 starts-->
     	<div class="activity-stream-wrapper">
        	<div class="activity-card">
    <!--activity header starts-->
            <div class="activity-header">
            	<div class="content-owner-pix"><img src="img/pix.png" width="100%"></div>
                <div class="content-owner-wrapper">
                	<div class="content-owner-name">Paul Imisi</div>
                    <div class="activity-verb">uploaded a new video</div>
                    <div class="status-update-timestamp">2hours ago</div>
                </div>
            <div class="clear"></div>
            </div>
   <!--activity header stops-->
   <!--Video in post-->
   			<div class="photo-in-post-wrapper">
   				<div class="photo-in-status-update embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QjUqjxSTv3A" frameborder="0" allowfullscreen></iframe>
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
<!--activity card1 starts-->
     	<div class="activity-stream-wrapper">
        	<div class="activity-card">
    <!--activity header starts-->
            <div class="activity-header">
            	<div class="content-owner-pix"><img src="img/pix.png" width="100%"></div>
                <div class="content-owner-wrapper">
                	<div class="content-owner-name">Paul Imisi</div>
                    <div class="activity-verb">An audio blog post</div>
                <div class="status-update-timestamp">2hours ago</div>
                </div>
            <div class="clear"></div>
            </div>
   <!--activity header stops-->
   <!--Photo in post-->
   			<div class="photo-in-post-wrapper">
   				<div class="photo-in-status-update">
                <audio controls>
                    <source src="mp3/open_your_eyes.mp3" type="audio/mpeg" />
                    <a href="#">Open Your Eyes</a>
                </audio>
            <!--<img src="img/uploads/hazard.png" class="img-responsive" alt="Photo">
               <!-- <img src="img/uploads/port.jpg" class="img-responsive" alt="Photo">-->
                </div>
            </div>
           <!-- <div class="text-content">
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
<!--activity card1 ends-->
<!--activity card2 starts-->
     	<div class="activity-stream-wrapper">
        	<div class="activity-card">
    <!--activity header starts-->
            <div class="activity-header">
            	<div class="content-owner-pix"><img src="img/pix.png" width="100%"></div>
                <div class="content-owner-wrapper">
                	<div class="content-owner-name">Paul Imisi</div>
                    <div class="activity-verb">updated his status</div>
                <div class="status-update-timestamp">2hours ago</div>
                </div>
            <div class="clear"></div>
            </div>
   <!--activity header stops-->
            <div class="text-content">
            The project "Women For Change Initiative" was established in 2010 to sensitise, ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd empower and mobilise women to participate actively in governance.<br><br>
Dame Patience Jonathan is fighting to make Life better for women in the country and totally restore the dignity of womanhood.
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
            <!--comment card2-->
            <div class="comment-wrapper">
            	<div class="comment-card">
                	<div class="comment-owner-pix"><img src="img/pix.png" width="100%"></div>
                    <div class="comment-details">
                    	<div class="comment-owner-name">Paul Imisi</div>
                        <div class="comment-text">She has struggled relentlessly to awaken.</div>
                    </div>
                <div class="clear"></div>
                </div>
                <div class="comment-socials"><span><img src="img/icons/like.png" width="18" ><br>15</span></div>
            <div class="clear"></div>
            </div>
            <!--comment card2 ends-->
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
                <div class="clear"></div>
                </div>
                <div class="press-enter">Press enter to post comment</div>
              </div>
            <div class="clear"></div>
            </div>
            <!--post comment ends-->
            <div class="more-comments">See 25 more</div>
            </div>
        </div>
<!--activity card2 ends-->
<?php require("includes/blog_post.htm"); ?>
     </div>
<!--middle column ends-->
<!--right column starts-->
     <div class="col-lg-3 col-md-3 col-sm-3 right-col">
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
             <!--ad card begins-->
            <div class="ad-card">
            	<div class="ad-image"><img src="img/uploads/watches5.png" width="100%" ></div>
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
 <script>
  function __log(e, data) {
    log.innerHTML += "\n" + e + " " + (data || '');
  }

  var audio_context;
  var recorder;

  function startUserMedia(stream) {
    var input = audio_context.createMediaStreamSource(stream);
    //__log('Media stream created.' );
	//__log("input sample rate " +input.context.sampleRate);
    
    input.connect(audio_context.destination);
    //__log('Input connected to audio context destination.');
    
    recorder = new Recorder(input);
    __log('Recorder initialised.');
  }

  function startRecording(button) {
    recorder && recorder.record();
    button.disabled = true;
    button.nextElementSibling.disabled = false;
    __log('Recording...');
  }

  function stopRecording(button) {
    recorder && recorder.stop();
    button.disabled = true;
    button.previousElementSibling.disabled = false;
    __log('Stopped recording.');
    
    // create WAV download link using audio data blob
    createDownloadLink();
    
    recorder.clear();
  }

  function createDownloadLink() {
    recorder && recorder.exportWAV(function(blob) {
      /*var url = URL.createObjectURL(blob);
      var li = document.createElement('li');
      var au = document.createElement('audio');
      var hf = document.createElement('a');
      
      au.controls = true;
      au.src = url;
      hf.href = url;
      hf.download = new Date().toISOString() + '.wav';
      hf.innerHTML = hf.download;
      li.appendChild(au);
      li.appendChild(hf);
      recordingslist.appendChild(li);*/
    });
  }

  window.onload = function init() {
    try {
      // webkit shim
      window.AudioContext = window.AudioContext || window.webkitAudioContext;
      navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);
      window.URL = window.URL || window.webkitURL;
      
      audio_context = new AudioContext;
      //__log('Audio context set up.');
     // __log('navigator.getUserMedia ' + (navigator.getUserMedia ? 'available.' : 'not present!'));
    } catch (e) {
      alert('No web audio support found in this browser! You will not be able to use the audio blog feature.');
    }
    
    navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
      __log('No live audio input: ' + e);
    });
  };
  </script>

<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>
<script>$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })</script>
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
<script src="js/resize-textarea.js"></script>
<script src="js/bootstrap3_player.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
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
<script src="js/jquery.detect_swipe.js"></script> 
<script src="js/easy-side-bar-toggle.js"></script> 
</body>
</html>