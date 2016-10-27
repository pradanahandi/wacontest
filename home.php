<?php
session_start();
include"conn.php";
if (isset($_POST['login'])){
    $username=mysqli_real_escape_string($conn,$_POST['email']);
    $password=md5(mysqli_real_escape_string($conn,$_POST['password']).'C0nt3st4n1m4t10n');
    $sql="select * from t_user where email='$email' and password='$password' ";
    $result=mysqli_query($conn,$sql);
    $cek=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    $username=$row['email'];
    $password=$row['password'];
    $level=$row['level'];
    if($cek){
      $_SESSION['email']=$username;
      $_SESSION['password']=$password;
      $_SESSION['level']=$level;
      
      if($level==1){
      ?><script language="javascript">document.location.href="dataadm/index.php";</script><?php
      
      }     
      else{
      } 
        ?><script language="javascript">document.location.href="index.php?er=1";</script><?php
    }
}
/*if(isset($_POST['btn_login'])){
	$error = array();
	if(empty($_POST['email'])){
		$error[] = "Username cannot empty";
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


/*if (isset($_POST['btn_login'])){
    $username=mysqli_real_escape_string($conn,$_POST['email']);
    $password=md5(mysqli_real_escape_string($conn,$_POST['password']).'C0nt3st4n1m4t10n');
    $sql="SELECT * FROM t_user WHERE email='$email' and password='$password' ";
    $result=mysqli_query($conn,$sql);
    $cek=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    $username=$row['email'];
    $password=$row['password'];
    $level=$row['level'];
    if($cek){
      $_SESSION['email']=$username;
      $_SESSION['password']=$password;
      $_SESSION['level']=$level;
      
      if($level==2){
      	echo "suksessss";
      	
      }     
      else{
      	$conn->error;
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
						<a class="navbar-brand active" href="https://www.facebook.com/seameoseamolec"><i class="fa fa-facebook"></i>Facebook</a> <a class="navbar-brand active" href="https://twitter.com/seamolec"><i class="fa fa-twitter"></i>Twitter</a>
					</div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse main-nav" id="sept-main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">Home</a></li>
							<li class="dropdown">
								<a href="http://localhost/wacontest/index.php?a=about" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">Contest Guideline</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="http://localhost/wacontest/index.php?a=about">Introduction</a></li>
									<li><a href="#">Theme</a></li>
									<li><a href="#">Participants</a></li>
									<li><a href="#">Rules</a></li>
									<li><a href="#">Prizes</a></li>
								</ul>
							</li>							
							<li><a href="#portfolio" class="active">Gallery</a></li>				
							<li><a href="#faq-sec">Winner Announcement</a></li>					
							<li><a href="#contact" class="active">Contact Us</a></li>
							<li><a href="?a=login" class="active">Login</a></li>
							<li><a href="?a=register" class="active">Register</li>							
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>
		
		<section class="home" id="home" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="st-home-unit">
							<div class="hero-txt">
								<p class="hero-work">Whiteboard - Animation - Sketch Drawing</p>
								<h2 class="hero-title">Let's The Creativity Leads You</h2>
								<!--<p class="hero-sub-title">We Provide Hight Quality Bootstrap Template</p> -->
								<!-- <a href="#" class="btn btn-default btn-lg left-btn">Purchase Now</a>--> 
								<!--<a href="#" class="btn btn-main btn-lg">Learn More</a>							</div>-->
						</div>
					</div>
				</div>
			</div>
			<div class="mouse-icon"><div class="wheel"></div></div>
		</section>
		<section class="call-2-acction" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="c2a">
							<h2>Theme</h2>
							<h2>
								Developing ICT culture as a part of 21st century competency in Southeast Asia.
							</h2>							
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<!--<section class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>WelCome to Nexus</h3>
							<p>About Nexus </p>
						</div>
						<div class="block mb0">
							<div class="col-md-6 padd25 no-padding-top no-padding-bottom padding-left-15">
							<h3>Our Amazing Features</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. </p>
							</div>
							<div class="col-md-6 padd no-padding-bottom">
								<img src="photos/about.jpg" alt="" class="img-responsive">
							</div>
						</div>

						<div>
						<div class="block1">
							<div class="col-md-3">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/member1.png" alt="" class="img-responsive">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">John Deo</strong>
										<p class="st-member-pos">CEO</p>
										
										<div class="st-member-social">
											<ul>
												<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/member2.png" alt="" class="img-responsive">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Sarah Smith</strong>
										<p class="st-member-pos">Designer</p>
										
										<div class="st-member-social">
											<ul>
												<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/member3.png" alt="" class="img-responsive">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Stephen Doe</strong>
										<p class="st-member-pos">Developer</p>
										
										<div class="st-member-social">
											<ul>
												<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/member4.png" alt="" class="img-responsive">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Mark Deo</strong>
										<p class="st-member-pos">Developer</p>
										
										<div class="st-member-social">
											<ul>
												<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							</div>
							
							
						</div>

					</div>
				</div>
			</div>
		</section>-->

		<!--<section class="funfacts" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-briefcase"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="25964" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Projects</strong>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-clock-o"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="35469" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Hours Work</strong>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-send"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="86214" data-runit="1">0</span>+</div>
							<strong class="funfact-title">E-mail</strong>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-star"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="3647" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Completed</strong>
						</div>
					</div>
				</div>
			</div>
		</section>-->

		<section class="service" id="service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>What we do</h3>
							<p>Our Awesome Services</p>
						</div>
						<div class="block">
							<div class="col-md-3">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-cog"></i></div>
									<strong class="st-feature-title">Fully Responsive</strong>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-university"></i></div>
									<strong class="st-feature-title">Simple and Clean</strong>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-comments-o"></i></div>
									<strong class="st-feature-title">Easy to Customize</strong>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-life-ring"></i></div>
									<strong class="st-feature-title">Creative Design</strong>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
				

		<section class="portfolio" id="portfolio">
			<div class="container-fluid ">
				<div class="row">
					<div class="col-md-12 no-padding ">
						<div class="section-title st-center">
							<h3>Example</h3>
							<p>Whiteboard Animation Video</p>
						</div>						

						<div class="grid">
							<figure class="portfolio-item" data-groups='["photography"]'>
								<!--<img src="assets/photos/portfolio.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>-->
								<iframe width="560" height="315" src="https://www.youtube.com/embed/sDKA4dVWJw4" frameborder="0" allowfullscreen></iframe>
						  </figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<!--<img src="assets/photos/portfolio2.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>-->
								<iframe width="560" height="315" src="https://www.youtube.com/embed/-sYVMU7DQ7E" frameborder="0" allowfullscreen></iframe>
						  </figure>
							<figure class="portfolio-item" data-groups='["photography"]'>
								<!--<img src="assets/photos/portfolio3.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>-->
									<iframe width="560" height="315" src="https://www.youtube.com/embed/MO-tfws-62Q" frameborder="0" allowfullscreen></iframe>
						  </figure>						
						</div>

					</div>
				</div>
			</div>
		</section>

		<!--<section class="clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">						
						<ul class="clients-carousel">
							<li><img src="assets/photos/client.png" class="img-responsive" alt=""></li>
							<li><img src="assets/photos/client2.png" class="img-responsive" alt=""></li>
							<li><img src="assets/photos/client3.png" class="img-responsive" alt=""></li>
							<li><img src="assets/photos/client4.png" class="img-responsive" alt=""></li>
							<li><img src="assets/photos/client5.png" class="img-responsive" alt=""></li>
							<li><img src="assets/photos/client6.png" class="img-responsive" alt=""></li>
							<li><img src="assets/photos/client7.png" class="img-responsive" alt=""></li>
							<li><img src="assets/photos/client8.png" class="img-responsive" alt=""></li>
							<li><img src="assets/photos/client9.png" class="img-responsive" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</section>-->
		
		
		<section class="faq-sec" id="faq-sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- <h2 class="tac">frequently asked questions</h2> -->
						<div class="section-title st-center">
							<h3>Some questions</h3>
							<p>frequently asked questions</p>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Minime paulo beatus stare?</h3>
							<p>Praesidium quaerat doloribus turpis fruuntur vocant postremo optimus utraque, veserim vitae appellant fructuosam, mediocris consistat impetu illae coniunctione modi consequentis nosque, vis qui deorum, poenis fuisse timorem ferae fastidium.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Ferentur interrogari diceret?</h3>
							<p>Pertinerent non importari, populo faciendi civium vetuit. Gravitate numquam praesentium fabulas. Abest ponatur ineruditus restat consoletur causam, ordiamur temperantiam repellat desistemus conquirendae molestia aiunt discenda monet.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Dicent erigimur secutus fortunae?</h3>
							<p>Quarum difficilius aegritudo epularum municipem alias. Vidisse litteris, rationibus eadem, mandaremus maluisset, delectus terrore angusta deduceret numquam fidelissimae mens gravissimo propter, tradit, fastidium facta facerem qua quippiam vacuitate cupiditatum admirer navigandi.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Molestiae dedocere effluere?</h3>
							<p>Habeo mala nocet perpetiuntur legendos dicemus levitatibus abducat futura, occultarum probant vitae evertunt laudantium docendi difficilem, offendit concederetur tuo hortensio deserere, molita gaudemus titillaret difficilius, parum timeret unum molestiam omnis vitae.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Contact Us</h3>
							<p>Get in Touch with Us</p>
						</div>
					</div>
				</div>
				<div class="block">
					<!--<div class="col-md-6">
						<form class="contact-form" >
							<input type="text" class="form-control" id="fname" name="fname" placeholder="Your Full Name">
							<input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail">
							<input type="text" class="form-control" id="subj" name="subj" placeholder="Your Subject">
							<textarea id="mssg" name="mssg" placeholder="Your Message" class="form-control" rows="10"></textarea>
							<button class="btn btn-main btn-lg" type="submit" id="send" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."> Send</button>
						</form>
						<div id="result-message" role="alert"></div>
					</div>-->
					<div class="col-md-12">
						<p align="center">For further inquiries, give us a call or send us an email and we will get back to you as soon as possible!							
						</p>
						<div class="col-md-12">
							<div class="col-md-6">
								<h1 align="center"><i class="fa fa-phone"></i></h1>
								<address align="center">
									(62-21) 742 3725, 742 4154
								</address>
							</div>						
							<div class="col-md-6">
								<h1 align="center"><i class="fa fa-envelope"></i></h1>
								<address align="center">
									<a href="mailto:wanimation@seamolec.org">wanimation@seamolec.org</a>
								</address>
							</div>
						</div>
						<!--<address>
							<strong>ThemesGround, Inc.</strong><br>
							Main Rd,<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">Phone:</abbr> (123) 456-7987
						</address>-->						
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