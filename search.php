<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search our website</title>
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Gokak Power & Energy Ltd.</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon1.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>

<body>
<div id="wrapper">
	<!-- shell -->
	<div class="shell">
		<!-- container -->
		<div class="container">
			<!-- header -->
			<header id="header">
				<h1 id="logo"><a href="index.php">GOKAK POWER</a></h1>
                <h1 id="logoGTL"><a href="http://www.gokakmills.com">GOKAK TEXTILES</a></h1>
                <h1 id="logoSP"><a href="http://www.sp-group.co.in">SHAPOORJI PALLONJI</a></h1>
				<!-- search -->
				<div class="search">
					<form action="search.php" method="post">
						<input type="text" class="field" name="search" value="keywords here ..." title="keywords here ..." />
						<input type="submit" class="search-btn" name="submit" value="" />
						<div class="cl">&nbsp;</div>
					</form>
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</header>
			<!-- end of header -->
			<!-- navigaation -->
			<nav id="navigation">
				<a href="#" class="nav-btn">HOME<span></span></a>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="aboutus/aboutus.html">ABOUT US</a></li>
                    
					<li><a href="investors/investors.html">INVESTORS</a></li>
					<li><a href="operations/operations.html">OPERATIONS</a></li>
					<li><a href="environment/environment.html">ENVIRONMENT</a></li>
					<li><a href="careers/careers.php">CAREERS</a></li>
					<li><a href="contactus/contactus.php">CONTACT US</a></li>
					
				</ul>
				<div class="cl">&nbsp;</div>
			</nav>
           
			<!-- end of navigation -->
			<!-- slider-holder -->
            
            <div class="main">
             <div id="break"></div>
            <?php 

$submit = $_POST["submit"];
$search = $_POST["search"];

if(strlen($search)<=2)
{
	echo "search term too short";
}
else
{
	echo "You searched for <b>$search</b> <hr size='1'/>";
}

?>
            </div>
            
            	<!-- footer -->
			<div id="footer" >
				<div class="footer-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="aboutus/aboutus.html">About Us</a></li>
						<li><a href="investors/investors.html">Investors</a></li>
						<li><a href="operations/operations.html">Operations</a></li>
						<li><a href="environment/environment.html">Environment</a></li>
						<li><a href="careers/careers.php">Careers</a></li>
						<li><a href="contactus/contactus.php">Contact Us</a></li>
						
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
                
                <div class="footer-nav1">
                <br/>
                
					<ul>
						<li><a href="feedback/feedback.php">Feedback</a></li>
						<li><a href="sitemap/sitemap.html">Sitemap</a></li>
						<li><a href="disclaimer/disclaimer.html">Disclaimer</a></li>
				</ul>
                </div>
                <br/>
                <br/>
				<p class="copy"> Copyright &copy; <a href="index.php">Gokak Power & Energy Limited</a><span>|</span>2013. Designed by <a href="universe.bits-pilani.ac.in" target="_blank">BITS Pilani Students</a></p>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of footer -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of shell -->
</div>
<!-- end of wrapper -->


</body>
</html>