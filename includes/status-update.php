
     	<div class="status-update-wrapper">
        <ul class="nav nav-tabs" role="tablist" id="myTab">
          <li role="presentation"><a href="#main" aria-controls="main" role="tab" data-toggle="tab"><span class="status-update-icon-active"><img src="img/icons/status-blue.png" width="12" ></span>Status</a></li>
          <li role="presentation"><a href="#photo" aria-controls="photo" role="tab" data-toggle="tab"><span class="status-update-icon"><img src="img/icons/pv-white.png" width="12" ></span>Photo<span class="hide-div">/Video</span></a></li>
          <li role="presentation"><a href="#blog" aria-controls="blog" role="tab" data-toggle="tab"><span class="status-update-icon"><img src="img/icons/blog-white.png" width="12" ></span>Blog</a></li>
          <li role="presentation"><a href="#audio" aria-controls="audio" role="tab" data-toggle="tab"><span class="status-update-icon"><img src="img/icons/audio.png" width="12" ></span>Audio</a></li>
        </ul>
        <div class="tab-content">
        <!--status update text-->
          <div role="tabpanel" class="tab-pane active" id="main">
          	 <div class="status-update-form-wrapper">
            	<textarea rows="3" class="update-status" placeholder="What's on your mind?"></textarea>
          </div>
          <div class="status-update-bottom">
              <div class="status-update-bottom-icons">
                <ul class="list-inline">
                        <li role="presentation"><span><a href="#photo" aria-controls="photo" role="tab" data-toggle="tab"><img src="img/icons/photo.png" width="18" ></a></span></li>
                        <li><span><img src="img/icons/tag.png" width="18" ></span></li>
                        <li><span><img src="img/icons/location.png" width="18" ></span></li>
                </ul>
               </div>
            	<div class="post-update-button">Post</div>
          <div class="clear"></div>
          </div>
          </div>
           <!--status update photo/video-->
          <div role="tabpanel" class="tab-pane" id="photo">
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
           <!--blog post-->
          <div role="tabpanel" class="tab-pane" id="blog">
          <div class="blog-post-body">
			<input type="text" class="form-control" placeholder="Title" style="margin-bottom:10px;">
            <textarea rows="3" class="form-control" placeholder="Message"></textarea>
            <span class="btn add-photo-button fileinput-button" style="margin-top:10px;">
        	<span class="add-photo-button-icon">Add Photos...</span>       	
            <!-- The file input field used as target for the file upload widget -->
        	<input id="fileupload" type="file" name="files[]" multiple>
            <input type="hidden" name="username" value="georgesoros" /><input type="hidden" name="caption" value="2015-03-25_12_59_00_0200" />           
            </form>
    		</span>
          </div>
          <div class="status-update-bottom">
          	 <div class="status-update-bottom-icons">
                <ul class="list-inline">
                        <li><span>Posting to Frank's Blog</span></li>
                </ul>
               </div>
            <div class="post-update-button">Post</div>
          <div class="clear"></div>
          </div>
          </div>
         <!--blog post ends-->
         <!--audio blog starts-->
          <div role="tabpanel" class="tab-pane" id="audio">
          <div class="audio-post-body" style="text-align:center;">
          <textarea rows="1" class="update-status" placeholder="Write something..."></textarea>
<!-- Button trigger modal -->
            <button type="button" class="btn audio-blog-button" data-toggle="modal" data-target="#myModal">
              Record Your Message
            </button><br>OR<br>
             <span class="btn add-photo-button fileinput-button" style="margin-top:10px;">
        	<span class="add-photo-button-icon">Upload Audio Message</span>
        	<!-- The file input field used as target for the file upload widget -->
            <form id="upload" action="//192.168.10.125:8080/audio" method="post" enctype="multipart/form-data"> 
        	<input id="fileupload" type="file" name="files[]" multiple>
    		</span>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Record Your Message</h4>
      </div>
      <div class="modal-body">
       <p>
	<div id="recorder-wrap">
	    <div id="recorder">
	          <button class="btn reg-audio-button" onclick="startRecording(this);">start recording</button>
  			  <button class="btn reg-audio-button-stop" onclick="stopRecording(this);" disabled>stop</button>  
              <div id="log"></div>
              <ul id="recordingslist"></ul>
	    </div>
	</div>
	<div id="audio_container">
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Continue</button>
      </div>
    </div>
  </div>
</div>
          </div>
          <div class="status-update-bottom">
            <div class="post-update-button">Post</div>
          <div class="clear"></div>
          </div>
          </div>
        <!--audio blog ends-->
        </div> 
        </div>
