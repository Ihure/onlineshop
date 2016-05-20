<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Cladbox Signin</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pakhi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- dropdown -->
<script src="../js/jquery.easydropdown.js"></script>
<link href="../css/nav.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript">
		function conf_pwd(str){
			var pwd = document.getElementById('pwd').value;
			if( pwd == str ){
				document.savedet.errmsg.style.visibility ='hidden';
			}
			else{
				document.savedet.errmsg.style.visibility ='visible';
			}

		}
		function validate_username(str){

			valid =true;
			var nameRegex = /^[a-zA-Z0-9-_]+$/;
			var validUsername = str.match(nameRegex);
			if(validUsername == null){
				document.getElementById('usname').style.background='red';
				alert("Your user name is not valid. Only letters,numbers and '_' are  acceptable.");
				document.getElementById('usname').focus();
				valid = false;
			}else{
				document.getElementById('usname').style.background='transparent';
				valid = true;
			}
			return valid;
		}

	</script>

	<script type="text/javascript" >

		function validate_reg ( )
		{

			if ( document.getElementById('email').value== '' )
			{
				alert ( "Please input your email address" );
				valid = false;
				document.savedet.email.focus();
			}
			else if ( document.savedet.usname.value == "" )
			{
				alert ( "Please input a username" );
				valid = false;
				document.savedet.usname.focus();
			}
			else if ( document.savedet.name.value == "" )
			{
				alert ( "Please input your name" );
				valid = false;
				document.savedet.name.focus();
			}
			else if ( document.savedet.phoneno.value == "" )
			{
				alert ( "Please input your Phone Number!" );
				valid = false;
				document.savedet.phoneno.focus();
			}
			else if ( document.savedet.cpwd.value == "" )
			{
				alert ( "Please confirm your password!" );
				valid = false;
				document.savedet.cpwd.focus();
			}
			else if ( document.savedet.cpwd.value != document.savedet.pwd.value )
			{
				alert ( "Your password do not match" );
				valid = false;
				document.savedet.pwd.focus();
			} else {

				valid = true;
			}

			return valid;

		}

		function validate_lgn(){
			valid = true;
			if ( document.getElementById('lusname').value== '' )
			{
				alert ( "Please Enter a Username!" );
				valid = false;
				document.login.lusname.focus();
			}
			else if ( document.login.lpwd.value == "" )
			{
				alert ( "Please enter password!" );
				valid = false;
				document.login.lpwd.focus();
			}

			return valid;
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			//called when key is pressed in textbox
			$("#phoneno").keypress(function (e) {
				//if the letter is not digit then display error and don't type anything
				if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
					//display error message
					$("#errmsg").html("Digits Only").show().fadeOut("slow");
					return false;
				}
			});
		});
	</script>
<script type="text/javascript" src="../js/hover_pack.js"></script>
		  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<?php
			include('topmenu.php');
		?>
		</div>
		<!-- start login -->
	<div class="container">
		<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
				 
                    <li class="home">
                       <a href="welcome" title="Go to Home Page"><img src="../images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li>
                      Signup
                    </li>&nbsp;
                 
                </ul>
                <ul class="">
					<?php
					if (isset($success)){
						echo "<li>Your account has been created</li>";
					}
					?>
                	<!--<li><a href="index.html">Back to Previous Page</a></li>-->
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>

		<section id="main">
		<div class="login-content">
		<div class="container">
			<div class="login-signup-form">

				<form action="login" enctype="multipart/form-data" name="login" method="post" onsubmit="return validate_lgn()">
				<div class="col-md-5 login text-center">
					<h4>login</h4>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Username:
						</label>
						<ul style="color: #ff0000;"> <?php echo form_error('lusname'); ?></ul>
						<input type="text" name="lusname" id="lusname" >
					</div>
					<div class="clearfix"></div>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Password:
						</label>
						<ul style="color: #ff0000;"> <?php echo form_error('lpwd'); ?></ul>
						<input type="password" name="lpwd" id="lpwd"  >
					</div>
					<div class="clearfix"></div>
					<div class="sky-form span_99">
					<!--<label class="checkbox"><input type="checkbox" name="checkbox" >Remember me on this computer </label>-->
				</div>
				<div class="botton1">
					<input type="submit" value="SIGNIN" class="botton">
				</div>
				<!--<div class="forgetit">
					<a href="">forgot your password?</a>
					<input type="text" class="text" value="Enter email to reset it" onfocus="this.value = '';" onblur="if (this.value == 'Enter email to reset it') {this.value = 'Enter email to reset it';}">
					<input type="submit" value="SUBMIT" class="botton">
				</div>-->
				</div>
				</form>
				<form action="addnewuser" enctype="multipart/form-data" name="savedet" method="post" onsubmit="return validate_reg()">
				<div class="col-md-5 sign-up text-center">
					<h4>signup</h4>

					<div class="cus_info_wrap">
						<label class="labelTop">
						Name:
						<span class="require">*</span>
						</label>
						<input type="text" name="name" id="name" >
					</div>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Phone No:
						<span class="require">*</span>
						</label>
						<input type="text" name="phoneno" id="phoneno" >&nbsp;<span id="errmsg"></span>
					</div>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Email:
						<span class="require">*</span>
						</label>
						<ul style="color: #ff0000;"> <?php echo form_error('email'); ?></ul>
						<input type="text" name="email" id="email"  value="">
					</div>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Username:
						<span class="require">*</span>
						</label>
						<ul style="color: #ff0000;"> <?php echo form_error('usname'); ?></ul>
						<input type="text" name="usname" id="usname" onblur="validate_username(this.value)">
					</div>
					<div class="clearfix"></div>
				    <div class="cus_info_wrap">
						<label class="labelTop">
						Password:
						<span class="require">*</span>
						</label>
						<ul style="color: #ff0000;"> <?php echo form_error('pwd'); ?></ul>
						<input type="password" name="pwd" id="pwd" >
					</div>
					<div class="clearfix"></div><div class="cus_info_wrap">
						<label class="labelTop confirmpass">
						Confirm Password:
						<span class="require">*</span>
						</label>
						<input type="password" name="cpwd" id="cpwd" onblur="conf_pwd(this.value)" >
						<input  type="text" id="errmsg" name="errmsg" readonly style="visibility: hidden; width:210px; border: none; color: #ff0000;  " value="Passwords don't match" />
					</div>
					<div class="botton1">
					<input type="submit" value="SIGNUP" class="botton">
				</div>
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
		</div>
		</section>
		<div class="footer">
		<div class="up-arrow">
			<a class="scroll" href="#home"><img src="../images/up.png" alt="" /></a>
		</div>
			<div class="container">
				<div class="copyrights">
					<p>Copyright &copy; 2015 All rights reserved | Design <a href="http://www.kaizenkenya.co.ke">Ryda Inc</a></p>
				</div>
				<div class="footer-social-icons">
					<a href="#"><i class="fb"></i></a>
					<a href="#"><i class="tw"></i></a>
					<a href="#"><i class="in"></i></a>
					<a href="#"><i class="pt"></i></a>
				</div>
				  <div class="clearfix"></div>
			</div>
		</div>
</body>
</html>