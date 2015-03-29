<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="css/onboard.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pix-modal.css" rel="stylesheet" type="text/css">
<link href="css/photo_full_view.css" rel="stylesheet" type="text/css">
<link href="css/profile2.css" rel="stylesheet" type="text/css">
<link href="css/search.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<link rel="stylesheet" href="css/bootstrap3_player.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<title>Yookore - Full Screen Blog Viewer</title>
</head>

<body>
<?php require("includes/head.php") ?>
<!--content body starts-->
<div class="container" style="margin-top:62px;"><!--add the margin set off the fixed header-->
<div class="row xtra-pad">
<!--left column starts---->
    <div class="photo-left-col">
    <div class="activity-card" style="padding:0 15px;">
        <div style="padding:10px 0px;"><span style="font-size:18px; font-weight:700;">Blog</span><br>
        <a href="my_blog.php">Back to Blog</a> · <a href="my-blog-post.php">Paul's Blog</a> · <a href="userprofile.php">Paul's Timeline</a>
        </div>
    </div>
    	<!--create starts-->
     	<div class="activity-stream-wrapper">
        	<div class="activity-card" style="padding:15px 15px 0 15px;">
            <!--sub menu-->
     <div class="search-nav-wrapper">
     <ul class="cover-nav">
            <li><a href="my_blog.php">All Blog Post</a></li>
            <li><a href="my-blog-post.php">My Blog Post</a></li>
            <li class="active"><a href="create-blog-post-full.php">New Blog Post</a></li>
       </ul>
       <div class="clear"></div>
     </div>
            <?php require("includes/create-blog.php") ?>
            </div>
        </div>
<!--create ends-->
    </div>
<!-- left column ends-->
<!--right column starts-->
    <div class="photo-side-col">
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
<!--right column ends--->
</div>
</div>
<!--content body ends-->
<div class="footer"></div>
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
