<?php include 'validation.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Interior-Design-Responsive-Website-Templates-Edge">
	<meta name="author" content="webThemez.com">
	<title> Charith Enterprises </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
		<div id="header-top">       
		<!--  HEADER TOP -->
        <div class="container">
        	<div class="row">
				<div class="col-md-6"> 
                    
                        <div class="text">
                            
							<p>Call Us :+91 98490 11279</p>
                            
                        </div>      
                </div><!-- end -->
            	<div class="col-md-6">              	
                   <div class="social text-center pull-right">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>
                    
                </div><!-- end -->
            </div><!-- end .row -->
           </div> 
		</div>
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				
					 <img src="assets/images/logo.png" alt="assets"></a>
			</div>
			<div class="navbar-collapse collapse">
				 <ul class="nav navbar-nav pull-right mainNav">
                   <li class="active"><a href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="services.html">Services</a></li>
                    <li><a href="Gallery.html">Gallery</a></li>
					<li><a href="Client.html">Clients</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	 <header id="head" class="secondary" style="background:url(assets/images/contact.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					 <h1><font color="#FFFFFF">Contact us</font></h1>
                     <h1>Contact us</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						
						
						<form class="form-light mt-20" role="form" method="post" action="contact.php">
                       
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name" value="" placeholder="Your name">
                                <span class="error"><?php echo $nameError;?></span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" name="email" value="" placeholder="Email address">
                                        <span class="error"><?php echo $emailError;?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control"  name="phone" value="" placeholder="Phone number">
                                         <span class="error"><?php echo $mobilenoerror;?></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="message" name="message" val="" placeholder="Write you message here..." style="height:100px;"></textarea>
                                <span class="error"><?php echo $messageError;?></span>
							</div>
							<button type="submit" class="btn btn-two"  type="submit" name="submit">Send message</button><p><br/></p>
                             <span class="success"><?php echo $successMessage;?></span>
						</form>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Office Address</h3>
								<div class="contact-info">
									<h5>Address</h5>
									
       <p class="para" align="justify"> #6-3-347/22/6,
                                        Flat No 501,
                                        5th Floor,
                                        Sri Durga Tulsi Apartment,
                                        Near Sai baba Temple,
                                        Dwarakapuri Colony,
                                        Punjagutta,
                                        Hyderabad-500034. </p>
									
									<h5>Email</h5>
									<p>contactus@charithenterprises.in</p>
									
									<h5><p>Phone No </p></h5>
									<p>+91 98490 11279</p>
								</div>
							</div>
							
								</div>
							</div>
						</div>
												
					</div>
				</div>
			</div>
	<!-- /container -->

	

	<footer id="footer">
		<div class="container">
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
							 <a href="index.html">Home</a> | 
					         <a href="about.html">About Us</a> | 
					         <a href="services.html">Services</a> | 
                             <a href="Gallery.html">Gallery</a> | 
					         <a href="Client.html">Clients</a> | 
					         <a href="">Careers</a> | 
					         <a href="contact.php">Contact</a> | 
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								 <p class="w3-link">© 2015 All Rights Reserved.Charith Enterprises Pvt Ltd | Design by&nbsp; <a href="http://itreegt.com/"> iTree Global Technologies</a></p>

							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
