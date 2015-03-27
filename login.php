<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<title>Yookore - Login and Sign Up</title>
</head>

<body ng-app="">
<div class="top-header-bar">
	<div class="container"><div class="logo"></div></div>
</div>
<div class="container">
<div class="row">
    <div class="col-md-6 col-lg-8 app-ad-block"><img src="img/Login & Sign Up.png" width="100%"></div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 login-signup-form">
    <div class="negative-margins">
    <!--login form-->
    	<div class="login-area">
        	<div class="field50-wrap">
                <div class="field50-left"><input type="text" class="form-control" placeholder="Username"></div>
                <div class="field50-right"><input type="password" class="form-control" placeholder="Password"></div>
                <div class="clear"></div>
            </div>
            <div class="forgot-password">forgot password?</div>
            <button type="submit" class="btn btn-signin">Sign In</button>
        </div>
        <!--sign up form-->
        <div class="signup-area">
        	<div class="signup-header">Sign Up</div>
            <div class="field50-wrap">
            	<div class="field50-left"><input type="firstname" class="form-control"  placeholder="First name"></div>
                <div class="field50-right"><input type="lastname" class="form-control" placeholder="Last Name">
</div>
            	<div class="clear"></div>
            </div>
            <div class="field-row"><input type="email" class="form-control" placeholder="Email Address"></div>
            <div class="field-row"><input type="mobile_number" class="form-control" placeholder="Mobile Number"></div>
            <div class="field-row"><input type="password" class="form-control" id="inputPassword" placeholder="Password"></div>
            <div class="field-row"><input type="password-confirm" class="form-control" id="inputPassword" placeholder="Confirm Password"></div>
            <div class="form-label">Date of Birth</div>
            <div class="field-row">
            	<div class="field33-left"><select name="month" class="form-control" placeholder="Confirm Password">
            	  <option value="Month">Month</option>
            	  <option value="Jan">Jan</option>
            	  <option value="Feb">Feb</option>
            	  <option value="Mar">Mar</option>
            	  <option value="Apr">Apr</option>
            	  <option value="May">May</option>
            	  <option value="Jun">Jun</option>
            	  <option value="Jul">Jul</option>
            	  <option value="Aug">Aug</option>
            	  <option value="Sep">Sep</option>
            	  <option value="Oct">Oct</option>
            	  <option value="Nov">Nov</option>
            	  <option value="Dec">Dec</option>
            	</select></div>
                <div class="field33-mid">
                	<select name="month" class="form-control" placeholder="Confirm Password">
                	  <option value="Day" selected="SELECTED">Day</option>
            	  <option value="1">1</option>
            	  <option value="2">2</option>
            	  <option value="3">3</option>
            	  <option value="4">4</option>
            	  <option value="5">5</option>
            	  <option value="6">6</option>
            	  <option value="7">7</option>
            	  <option value="8">8</option>
            	  <option value="9">9</option>
            	  <option value="10">10</option>
            	  <option value="11">11</option>
            	  <option value="12">12</option>
            	  <option value="13">13</option>
            	  <option value="14">14</option>
            	  <option value="15">15</option>
            	  <option value="16">16</option>
            	  <option value="17">17</option>
            	  <option value="18">18</option>
            	  <option value="19">19</option>
            	  <option value="20">20</option>
            	  <option value="21">21</option>
            	  <option value="22">22</option>
            	  <option value="23">23</option>
            	  <option value="24">24</option>
            	  <option value="25">25</option>
            	  <option value="26">26</option>
            	  <option value="27">27</option>
            	  <option value="28">28</option>
            	  <option value="29">29</option>
            	  <option value="30">30</option>
            	  <option value="31">31</option>
                  </select>
                </div>
                <div class="field33-right">
                	<select name="month" class="form-control" placeholder="Confirm Password">
                	  <option value="Year" selected="selected">Year</option>
                	  <option value="2015">2015</option>
                	  <option value="2014">2014</option>
                	  <option value="2013">2013</option>
                  </select>
                </div>
            <div class="clear"></div>
            </div>
            <div class="field-row" style="color:#999; font-weight:normal;">
                 <div style="display:inline-block; margin-right:15px;">
                    <input type="radio" checked="checked" id="male" name="gender" value="1" /> Male
                 </div> 
                 <div style="display:inline-block;">
                    <input type="radio" id="female" name="gender" value="2" /> Female
                </div> 
           </div>
           <div class="t-c">By clicking Sign Up, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</div>
           <button type="submit" class="btn btn-signup">Sign Up</button>
        </div>
    </div>
    </div>
</div>
</div>
<div class="footer"> 
	<div class="container">Place footer here</div>
    </div>
</body>
</html>
