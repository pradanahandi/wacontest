<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themesground.com/nexus/demo/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 03:35:35 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Whiteboard Animation Contest</title>
		
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<link href="assets/css/owl.theme.css" rel="stylesheet">
		<link href="assets/css/owl.transitions.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/datepicker/css/bootstrap-datepicker3.css" rel="stylesheet">		
	
	</head>
	<body data-spy="scroll" data-target=".main-nav">	
		<?php
		  if(isset($_GET['a'])){
		    $hal = $_GET['a'];
		    switch($hal){
		        case 'register':
		            $hal = 'register';
		            break;
		        case 'login':
		            $hal = 'login';
		            break;		
		        case 'about':
		            $hal = 'about';
                	break;        
		    }
		    include $hal.'.php';
		  }else{
		      include 'home.php';
		  }
		?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<script src="assets/js/jquery.appear.js"></script>
		<script src="assets/js/jquery.nicescroll.min.js"></script>
		<script src="assets/js/jquery.countTo.js"></script>
		<script src="assets/js/jquery.shuffle.modernizr.js"></script>
		<script src="assets/js/jquery.shuffle.js"></script>
		<script src="assets/js/owl.carousel.js"></script>
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="assets/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="assets/js/script.js"></script>
		<script type="text/javascript">
            $(document).ready(function () {
                $('#birthday').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script>
	</body>

<!-- Mirrored from themesground.com/nexus/demo/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 03:37:17 GMT -->
</html>
