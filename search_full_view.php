<!DOCTYPE html>
<html ng-app="asideApp">
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
<!-- CSS adjustments for browsers with JavaScript disabled -->
<title>Activity Stream</title>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/recordmp3.js"></script>
<!--new scripts-->
<link href="css/search.css" rel="stylesheet" type="text/css">
<link href="css/userprofile.css" rel="stylesheet" type="text/css">
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
    $('.search-user-card').hover(function () {
        $(this).find('.caption').slideDown(350); //.fadeIn(250)
    }, function () {
        $(this).find('.caption').slideUp(100); //.fadeOut(205)
    });
});
</script>

<!--new scritp ends-->
<!--newer scripts---->
<link href="css/pix-modal.css" rel="stylesheet" type="text/css">
<script src="js/mikes-modal.min.js" type="text/javascript"></script>
<script src="js/photo-modal.js" type="text/javascript"></script>


<!---newer scripts ends-->
<script>	
$().ready(function() {
var $scrollingDiv = $(".advert-wrapper");
$(window).scroll(function(){

if($(window).scrollTop() > 320 ){ // Start scrolling after this distance from the top – adjust it for what you need (trial and error or a ruler on the screen graduated in pixels ;) )
$scrollingDiv
.stop()
.animate({"marginTop": ($(window).scrollTop() - 30) + "px"}, "slow" );	 // How many pixels to add to the distance
}
if($(window).scrollTop() <= 320 ){ // Less than this distance = RESET to original margin – set to 0 here but you can reset to your own original margin – this stops the element raising up too high up the page
$scrollingDiv
.stop()
.animate({"marginTop": "0px"}, "slower" );
}
var mql = window.matchMedia("screen and (max-width: 1139px)")
if (mql.matches){ // if media query matches
 $scrollingDiv
.stop()
.animate({"marginTop": "0px"}, "fast" );
}
});
});
</script>


</head>

<body ng-controller="MainCtrl"><!--please take not of the name-->
<?php require("includes/head.php") ?>
<!--header ends-->
<div class="container" style="margin-top:62px;"><!--add the margin set off the fixed header-->
<div class="row xtra-pad">
<!--left column-->
	 <div class="col-lg-3 col-md-3 col-sm-3 left-col">
     <?php require("includes/stream-side-nav.html") ?>
     </div>
<!--left column ends-->
<!--middle column starts-->
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-col">
     <!--sub menu-->
     <div class="search-nav-wrapper">
     <ul class="cover-nav">
            <li class="active"><a href="#">People</a></li>
            <li><a href="#">Post</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Pages</a></li>
       </ul>
       <div class="clear"></div>
     </div>
     <!--search result starts-->
     <div class="search-holder">
<!--search count-->
<div class="search-result-header">Search results for D...</div>
<!--search user1 starts-->
            <div class="search-user-card">
            <div class="caption" style="z-index:30000;">
                     <h4 style="padding:10px 0; font-weight:700;">Paul Imisi Akpoduado</h4>
                    <a  href="" class="add-photo-button">Add Friend</a>
                    <a  href="" class="add-photo-button">Send Message</a>
                    <a  href="" class="add-photo-button">View Profile</a>
            </div>
            	<div class="search-user-pix-lg"><img src="img/pix.png" width="100%"></div>
                <div class="search-user-wrapper-lg">
                	<div class="search-user-name-lg">Paul Imisi Akpoduado <span>Academy of Business & Computer Studies</span></div>
                    <div class="list-group" style="margin-bottom:7px;">
                      <a href="#" class="list-group-item " style="padding:3px 35px; background-image:url(img/icons/location.png); background-repeat:no-repeat; background-position: 3% 50%;">
                        <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">South Africa</span>
                        <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Lives in Randburg</p>
                      </a>
                    </div>
                </div>
            <div class="clear"></div>
            </div>
<!--search user1 stops-->
<!--search user2 starts-->
            <div class="search-user-card">
            <div class="caption" style="z-index:30000;">
            <h4 style="padding:10px 0; font-weight:700;">Kenny Adu</h4>
                    <a  href="" class="add-photo-button">Add Friend</a>
                    <a  href="" class="add-photo-button">Send Message</a>
                    <a  href="" class="add-photo-button">View Profile</a>
            </div>
            	<div class="search-user-pix-lg"><img src="img/uploads/port2.jpg" width="100%"></div>
                <div class="search-user-wrapper-lg">
                	<div class="search-user-name-lg">Kenny Adu <span>Georgia, USAS</span></div>
                   <div class="list-group" style="margin-bottom:7px;">
                      <a href="#" class="list-group-item " style="padding:3px 35px; background-image:url(img/icons/location.png); background-repeat:no-repeat; background-position: 3% 50%;">
                        <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">South Africa</span>
                        <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Lives in Randburg</p>
                      </a>
                    </div>
                </div>
            <div class="clear"></div>
            </div>
<!--search user2 stops-->
<!--search user3 starts-->
            <div class="search-user-card">
            <div class="caption" style="z-index:30000;">
            <h4 style="padding:10px 0; font-weight:700;">Kenny Adu</h4>
                    <a  href="" class="add-photo-button">Add Friend</a>
                    <a  href="" class="add-photo-button">Send Message</a>
                    <a  href="" class="add-photo-button">View Profile</a>
            </div>
            	<div class="search-user-pix-lg"><img src="img/akin.jpg" width="100%"></div>
                <div class="search-user-wrapper-lg">
                	<div class="search-user-name-lg">Makwena Madla <span>Lagos, Ngeria</span></div>
                   <div class="list-group" style="margin-bottom:7px;">
                      <a href="#" class="list-group-item " style="padding:3px 35px; background-image:url(img/icons/location.png); background-repeat:no-repeat; background-position: 3% 50%;">
                        <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">Nigeria</span>
                        <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Lives in Lagos</p>
                      </a>
                    </div>
                </div>
            <div class="clear"></div>
            </div>
<!--search user3 stops-->
<!--search user4 starts-->
            <div class="search-user-card">
            <div class="caption" style="z-index:30000;">
            <h4 style="padding:10px 0; font-weight:700;">Kenny Adu</h4>
                    <a  href="" class="add-photo-button">Add Friend</a>
                    <a  href="" class="add-photo-button">Send Message</a>
                    <a  href="" class="add-photo-button">View Profile</a>
            </div>
            	<div class="search-user-pix-lg"><img src="img/uploads/port2.jpg" width="100%"></div>
                <div class="search-user-wrapper-lg">
                	<div class="search-user-name-lg">Kenny Adu <span>Georgia, USAS</span></div>
                   <div class="list-group" style="margin-bottom:7px;">
                      <a href="#" class="list-group-item " style="padding:3px 35px; background-image:url(img/icons/location.png); background-repeat:no-repeat; background-position: 3% 50%;">
                        <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">USA</span>
                        <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Lives in Georgia</p>
                      </a>
                    </div>
                </div>
            <div class="clear"></div>
            </div>
<!--search user4 stops-->
<!--search user5 starts-->
            <div class="search-user-card">
            <div class="caption" style="z-index:30000;">
            <h4 style="padding:10px 0; font-weight:700;">Makwena Madla</h4>
                    <a  href="" class="add-photo-button">Add Friend</a>
                    <a  href="" class="add-photo-button">Send Message</a>
                    <a  href="" class="add-photo-button">View Profile</a>
            </div>
            	<div class="search-user-pix-lg"><img src="img/akin.jpg" width="100%"></div>
                <div class="search-user-wrapper-lg">
                	<div class="search-user-name-lg">Makwena Madla <span>Lagos, Ngeria</span></div>
                   <div class="list-group" style="margin-bottom:7px;">
                      <a href="#" class="list-group-item " style="padding:3px 35px; background-image:url(img/icons/location.png); background-repeat:no-repeat; background-position: 3% 50%;">
                        <span class="list-group-item-heading" style="padding-bottom:3px; margin-bottom:3px; font-weight:700; line-height:normal; font-size:12px;">Nigeria</span>
                        <p class="list-group-item-text" style="color:#666; font-weight:normal; line-height:normal; font-size:12px;">Lives in Lagos</p>
                      </a>
                    </div>
                </div>
            <div class="clear"></div>
            </div>
<!--search user5 stops-->
</div>
     <!--search result ends-->
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
</body>
</html>