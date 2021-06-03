<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title;?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include "../includes/styleLinks.php"; ?>
</head>
<body>
	<header>
	    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	      <div class="container">
	        <a class="navbar-brand" href="main">
	          <img src="../images/claybrook.jpg" height="50" alt="docFind"><span>ClayBrook Zoo</span>
	        </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="fa fa-bars"></span> Menu
	        </button>
	        <div class="collapse navbar-collapse" id="ftco-nav">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item"><a href="main" class="nav-link">Home</a></li>
	            <li class="nav-item"><a href="about" class="nav-link">About</a></li>
	            <li class="nav-item"><a href="bookTickets" class="nav-link">Book Tickets</a></li>
	            <li class="nav-item"><a href="admin/admin_home" class="nav-link">Staff Login</a></li>
	            <li class="nav-item">
	            	<a class="nav-link">
	            		<form action="">
                            <input type="text" name="animals" placeholder="Search animals" style="border-radius: 25px; height:33px; border: 1px solid white;">
                       
                            <span><button type="submit" style="border:0px; height:30px; margin-left:-3px; background-color: green; border-radius: 25px;"><i class="fa fa-search" style="color:white;"></i></button></span>
                        </form>
	            	</a>
	            </li><!-- SEARCH FORM -->
	          </ul>
	        </div>
	      </div>
	    </nav>
	    <nav class="sidebar">
	      <div class="dismiss">
	        <i class="fa fa-arrow-left"></i>
	      </div>
	      <div>
	        <a class="navbar-brand" href="index.html">
	            <span>ClayBrook Zoo</span></a>
	      </div>
	    </nav>
	    <div class="overlay"></div>
  	</header>
<!-- END nav -->

	<?php echo $content;?>

  	<footer class="footer">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
	          <h2 class="footer-heading">ClayBrook Zoo</h2>
	          <p>Experience the wildlife</p>
	          <ul class="ftco-footer-social p-0">
	            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span><i class="fab fa-facebook-f"></i></span></a></li>
	            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span><i class="fab fa-twitter"></i></span></a></li>
	            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span><i class="fab fa-instagram"></i></span></a></li>
	          </ul>
	        </div>

	        <div class="col-md-4 col-lg-4 pl-lg-5 mb-4 mb-md-0">
	          <h2 class="footer-heading">Help</h2>
	            <ul class="list-unstyled">
	              <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
	              <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	            </ul>
	        </div>
	          
	        <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
	           	<h2 class="footer-heading">Contact Us</h2>
	          	<div class="block-23 mb-3">
	          		<ul>
	          			<li><span class="icon fa fa-map"></span><span class="text">NorthWest,England</span></li>
		                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 932 9932 012</span></a></li>
		                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@claybrook.com</span></a></li>
		            </ul>
	            </div>
	          </div>
	        </div>
	        <div class="row mt-5">
	        	<div class="col-md-12 text-center">
	            	<p class="copyright">Copyright &copy;Claybrook Zoo <script>document.write(new Date().getFullYear());</script>. All rights reserved.</p>
	            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	          	</div>
	        </div>
	    </div>
   	</footer>
	<?php include "../includes/scriptLinks.php"; ?>
</body>
</html>