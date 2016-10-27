<?php
session_start();
include"conn.php";
if (isset($_POST['btn_login'])){	
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=md5(mysqli_real_escape_string($conn,$_POST['password']).'C0nt3st4n1m4t10n');
    $sql="SELECT * FROM t_user WHERE email='$email' AND password='$password' ";
    $result=mysqli_query($conn,$sql);
    $cek=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    $email=$row['email'];
    $password=$row['password'];
    $level=$row['level'];    
    if($cek){
      $_SESSION['email']=$email;
      $_SESSION['password']=$password;
      $_SESSION['level']=$level;
      
      if($level==2){
      ?><?php
      	echo '<script>alert("Berhasill");</script>';
      	echo $_SESSION['email'];	
      
      }     
      else{
      	echo '<script>alert("Password Salah!");</script>';
      } 
        ?><?php
    }
}
/*if(isset($_POST['btn_login'])){
	$error = array();
	if(empty($_POST['email'])){
		$error[] = "email cannot empty";
	} else{
		$email = mysqli_real_escape_string($conn, $_POST['email']);
	}

	if(empty($_POST['password'])){
		$error[] = "Email cannot empty";
	} else{
		$email = mysqli_real_escape_string($conn, md5($_POST['password']));
	}

	if(empty($error))
	{
		$sql="SELECT * FROM t_user WHERE email='$email' AND password='$password'";
		$result = $conn->query($sql) or die($conn->error.__LINE__);
		$rows = $result->fetch_assoc();
		extract($rows);
		if($result->num_rows > 0){
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['level'] = $level;
			if($level==2){
				echo "suksesss";
			}else{

				echo $conn->error;
			}

		}
	}	

}*/
?>

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
					<li><a href="?a=register">Register</a></li>															
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
				<div class="section-title st-center">
					<h3>Login</h3>							
				</div>
				<div class="block mb0">
					<div class="col-md-12 padd25 no-padding-top no-padding-bottom padding-left-15">
						<form action="" method="post" role="form">							
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="password" class="form-control">
							</div>										
							<!--<div class="form-group">
								<div class="g-recaptcha" data-sitekey="6LdHSQoUAAAAAFZnuo10HnbPA0TIxv81dtatunzD"></div>
							</div>-->
							<div class="form-group">
								<input type="submit" name="btn_login" class="btn btn-primary">
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