<header class="st-navbar">
	<nav class="navbar navbar-default navbar-fixed-top clearfix" >
		<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--<a class="navbar-brand active" href="#home">HOME</a>-->
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse main-nav" id="sept-main-nav">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="?a=login">Login</a></li>																	
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</header>
	
<section class="home" id="home1">			
	<!--<div class="mouse-icon"><div class="wheel"></div></div>-->
</section>
<section class="about" id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title p st-center">
					<h3>Registration</h3>
					<p>We recommend you to fulfil all fields of this registration form in order to make us easier processing your data and assessing your video. Thank you for your cooperation</p>								
				</div>
				<div class="block mb0">
					<div class="col-md-12 padd25 no-padding-top no-padding-bottom padding-left-15">
						<?php
						    	include 'conn.php';       
						        if(isset($_POST['btn_save'])){
						            $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
						            $birthday = strtotime($_POST['birthday']);
						            $birthday = date("Y-m-d", $birthday);						            
						            $place_birthday = mysqli_real_escape_string($conn,$_POST['place_birthday']);
						            $status= mysqli_real_escape_string($conn,$_POST['status']);
						            $email = mysqli_real_escape_string($conn,$_POST['email']);
						            $password = md5(mysqli_real_escape_string($conn, $_POST['password']).'C0nt3st4n1m4t10n');
						            $phone = mysqli_real_escape_string($conn,$_POST['phone']);
						            $country = mysqli_real_escape_string($conn,$_POST['country']);
						            $address =  mysqli_real_escape_string($conn,$_POST['address']);            
						            $file_doc = mysqli_real_escape_string($conn,$_FILES['file_doc']['name']);
						            $status = 2;

						            $cek = "SELECT email FROM t_user WHERE email='$email'";
						            $ada = $conn->query($cek);

						            if($ada->num_rows > 0){
						            	echo '<script>
										alert("JUDUL TERDAFTAR !"); window.location="?a=register"; </script>';
										exit();
						            }
						            else{
						            	if(move_uploaded_file($_FILES['file_doc']['tmp_name'],"assets/doc/".$_FILES['file_doc']['name'])){
						                	$save = ("INSERT INTO t_user VALUES('','$fullname','$birthday','$place_birthday','$status','$email','$password','$phone','$country','$address','$file_doc','$status')");
						            		//echo $save;
						            		$conn->query($save); 
						            		echo "sukses";
							            }else{
							                echo "upload gagal";
							            }	
						            }
						            
						                       
						            //move_uploaded_file($_FILES['file_doc']['tmp_name'],"../assets/dok/".$_FILES['file_doc']['name']);
						            //echo  '<script>alert("DATA TERSIMPAN") ; window.location="index.php";</script>';   
						        }        

						?>

						<form action="" method="post" enctype="multipart/form-data" role="form" name="form beranda">
							<div class="form-group">
								<label>Fullname</label>
								<input type="text" name="fullname" class="form-control" required="*">
							</div>
							<div class="form-group">
								<label>Birthday</label>
								<input type="text" name="birthday" id="birthday" class="form-control" required="*">
							</div>
							<div class="form-group">
								<label>Place of Birth</label>
								<input type="text" name="place_birthday" class="form-control" required="*">
							</div>

							<div class="form-group">
								<label>Status</label>
								<select class="form-control" name="status" required="*" >
									<option>Students</option>
									<option>College/University Students</option>
									<option>Teacher</option>									
								</select>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control" required="*">
							</div>
														
							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="password" class="form-control" required="*">
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" name="phone" class="form-control" required="*">
							</div>
							<div class="form-group">
								<label>Country</label>
								<select class="form-control" name="country" id="country" required="*" >
									<option>Brunei Darussalam</option>
									<option>Cambodia</option>
									<option>Indonesia</option>
									<option>Lao PDR</option>
									<option>Malaysia</option>
									<option>Myanmar</option>
									<option>Philippines</option>
									<option>Singapore</option>
									<option>Thailand</option>
									<option>Timor Leste</option>
									<option>Vietnam</option>
								</select>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" name="address" rows="5" required="*"></textarea>
							</div>
							<div class="form-group">
								<label>Upload ID</label>
								<input type="file" name="file_doc" class="form-controls" required="*">
								<label>(Scan of active identity card/student card/teacher card )</label>
							</div>
							<!--<div class="form-group">
								<div class="g-recaptcha" data-sitekey="6LdHSQoUAAAAAFZnuo10HnbPA0TIxv81dtatunzD"></div>
							</div>-->
							<div class="form-group">
								<input type="submit" name="btn_save" class="btn btn-primary">
							</div>

						</form>
					</div>
					<!--<div class="col-md-6 padd no-padding-bottom">
						<img src="assets/photos/about.jpg" alt="" class="img-responsive">
					</div>-->
				</div>

				<div>
				<div class="block1">														
					
				</div>

			</div>
		</div>
	</div>
</section>								

<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				&copy; <a href="#">SEAMOLEC</a> 2016.
				<!-- Don't Remove/Edit this. If you remove this you don't have permission to use this template. -->
				Designed by <a href="#">ThemesGround</a>
				<!-- So Please don't remove this -->
			</div>
		</div>
	</div>
</footer>		