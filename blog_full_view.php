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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<title>Yookore - Full Screen Photo Viewer</title>
<script src="js/mikes-modal.min.js" type="text/javascript"></script>
<script src="js/photo-modal.js" type="text/javascript"></script>
</head>

<body>
<?php require("includes/head.php") ?>
<!--content body starts-->
<div class="container" style="margin-top:62px;"><!--add the margin set off the fixed header-->
<div class="row xtra-pad">
<!--left column starts---->
    <div class="photo-left-col">
    <div style="padding:10px 15px; background:#fff; border-radius:4px; border:1px solid #ddd; margin-bottom:10px;">
    <span style="font-size:18px; font-weight:700;">Blog Post</span><br>
    <a href="my_blog.php">Back to Blogs</a> · <a href="create-blog-post-full.php">New Blog Post</a>
    </div>

    	<!--activity card0 starts-->
     	<div class="activity-stream-wrapper">
        	<div class="activity-card" style="padding:15px 15px 0 15px;">
            <!--Post owner starts-->
            <div class="photo-full-header" style="border-bottom:0px solid #ddd; margin-bottom:10px;">
            	<div class="content-owner-pix"><img src="img/pix.png" width="100%"></div>
                <div class="content-owner-wrapper">
                	<div class="content-owner-name">Paul Imisi</div>
                    <div class="activity-verb">created a new blog post</div>
                    <div class="status-update-timestamp">2hours ago</div>
                </div>
            <div class="clear"></div>
            </div>
            <div style="padding:0 0 7px 0; font-weight:bold; font-size:22px; color:#000;">This is my blog title: what a day!!!</div>
            <!--photo in post
   			<div class="photo-full-wrapper">
   				<div class="photo-in-status-update" style="background:#ccc;">
                <img class="img-responsive" style="vertical-align:middle" src="img/uploads/hazard.png">
                </div>
            </div>-->
            <div class="text-content">
            The project "Women For Change Initiative" was established in 2010 to sensitise, empower and mobilise women to participate actively in governance.
            Software is at the heart of GitHub—and code is the DNA of software. Chances are if you’re joining, you’ve got some code that you might want to push to GitHub. And that’s a fantastic idea!

Here are some great reasons to push projects to GitHub:
<br><br>
Version Control — Everything on GitHub is stored in Git, the best version control system around. Version control allows you to experiment and make mistakes in code without messing up your final product.

Keep your code in one place — Whether you work on multiple computers or just want to get some old projects off your computer, GitHub is the perfect place to store your projects online.

Collaboration — Once your code is on GitHub, you can invite others to work on your code with you. Send them a link to help you debug a problem.
			</div>
   <!--Post owner stops-->

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
</body>
</html>
