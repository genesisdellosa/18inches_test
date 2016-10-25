<!DOCTYPE html>
<html>
<head>
  <title>Architecks</title>
  <!--start of style sheets-->
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="login1.css">
  <!--end of style sheets-->
</head>

  <body>
  <!--start of login container-->
  <div class="container">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="logbox">
			<div class="logo">
				<img src="amsi_logo2.png" id="logo" alt="Architecks">
			</div>
		<div class="form_group">
			<?php echo form_open('cf_controller/startPage')?>
				<input name="username" type="text" required="required" class="input pass" placeholder="Username" />
				<input name="password" type="password" required="required" class="input pass" id="password" placeholder="Password" />
				<input type="submit" value="Sign in" class="inputButton" id="button"/>
			<?php echo form_close()?>
		</div>

			<div class="row">
				<div id="assistance" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
						
						<a href="" id="signIn_form">New User?</a>
	
				</div>
					
				<div id="assistance" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<a href="#" id="signIn_form">Help?</a>
				</div></br>
			</div>
		</div>
    </div>
  </div>
  <!--end of login container-->
  </body>
</html>