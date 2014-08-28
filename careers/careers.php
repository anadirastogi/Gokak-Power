<!DOCTYPE html>
<html lang="en">
<head>
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


<!-- wrapper -->
<div id="wrapper">
	<!-- shell -->
	<div class="shell">
		<!-- container -->
		<div class="container">
			<!-- header -->
			<header id="header">
				<h1 id="logo"><a href="../index.php">GOKAK POWER</a></h1>
                <h1 id="logoGTL"><a href="http://www.gokakmills.com">GOKAK TEXTILES</a></h1>
                <h1 id="logoSP"><a href="http://www.sp-group.co.in">SHAPOORJI PALLONJI</a></h1>
				<!-- search -->
				<!-- end of search -->
                <div class="search">
					<form action="../search.php" method="post">
						<input type="text" class="field" name="search" value="keywords here ..." title="keywords here ..." />
						<input type="submit" class="search-btn" name="submit" value="" />
						<div class="cl">&nbsp;</div>
					</form>
				</div>
			</header>
			<!-- end of header -->
			<!-- navigaation -->
			<nav id="navigation">
				<a href="#" class="nav-btn">HOME<span></span></a>
				<ul>
					<li ><a href="../index.php">HOME</a></li>
					<li><a href="../aboutus/aboutus.html">ABOUT US</a></li>
					<li><a href="../investors/investors.html">INVESTORS</a></li>
					<li><a href="../operations/operations.html">OPERATIONS</a></li>
					<li><a href="../environment/environment.html">ENVIRONMENT</a></li>
					<li class="active"><a href="careers.php">CAREERS</a></li>
					<li><a href="../contactus/contactus.php">CONTACT US</a></li>
					
				</ul>
				<div class="cl">&nbsp;</div>
			</nav>
            <div id="break"></div>
			<!-- end of navigation -->
			<!-- slider-holder -->
			<!-- main -->
			<div class="main1">
            <br/>
            <h1 style="margin-left:45%;">Careers</h1>
            <br/>
            <h2 style="margin-left:4%;">Recruitment Policy</h2>
            <br/>
            <p style="margin-left:4%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis.</p>
            <br/>
            <br/>
            <h2 style="margin-left:4%;">Openings</h2>
            <br/>
            <p style="margin-left:4%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis.</p>
            <br/>
            <br/>
            
            <h2 style="margin-left:4%;">Upload Your Resume</h2>
            <h5 style="margin-left:4%;">upload in *.pdf format only and file name should be YourName-DateOfBirth ie <span  style="color:#0C3">rameshsharma-471993.pdf</span></h5>
            <br/>
            <form class="main" action="careers.php" method="post" enctype="multipart/form-data">
            
			&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="upto" />


    		<p class="clearfix" > 
           <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="margin-left:2%;" type="submit" name="submit" value="Upload">
           <br>
					
			</p>
            <br/>
            

            </form>​​	
<?php
if (isset($_POST["submit"])){
$type = $_FILES ["upto"] ["type"];
$name = $_FILES ["upto"] ["name"];
$size = $_FILES ["upto"] ["size"];
$temp = $_FILES ["upto"] ["tmp_name"];
$error = $_FILES ["upto"] ["error"];


if ($error > 0)
{
	echo ("<h3 style='margin-left:4%; color:#97ca01'>*Error Uploading ur file!</h3>");
}
else
{
	if($type=="application/pdf")
	{
	move_uploaded_file($temp,"upload/".$name);
	echo "<h3 style='margin-left:4%; color:#97ca01'>*Upload Successful</h3>" ;
	}
	else
	{
	die ("<h3 style='margin-left:4%; color:#97ca01'>Sorry this format not allowed. Upload in *.PDF format <br/></h3>");
	}
}
}
?>				
<br/>
<br/>
			</div>
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			<div id="footer" >
				<div class="footer-nav">
					<ul>
						<li><a href="../index.php">Home</a></li>
						<li><a href="../aboutus/aboutus.html">About Us</a></li>
					<li><a href="../investors/investors.html">Investors</a></li>
					<li><a href="../operations/operations.html">Operations</a></li>
					<li><a href="../environment/environment.html">Environment</a></li>
					<li><a href="careers.php">Careers</a></li>
					<li><a href="../contactus/contactus.php">Contact Us</a></li>
				  </ul>
					<div class="cl">&nbsp;</div>
				</div>
                
                <div class="footer-nav1">
                <br/>
                
					<ul>
						<li><a href="../feedback/feedback.php">Feedback</a></li>
						<li><a href="../sitemap/sitemap.html">Sitemap</a></li>
						<li><a href="../disclaimer/disclaimer.html">Disclaimer</a></li>
				</ul>
                </div>
                <br/>
                <br/>
				<p class="copy"> Copyright &copy; <a href="../index.php">Gokak Power & Energy Limited</a><span>|</span>2013. Designed by <a href="http://bits-pilani-webd.herokuapp.com/" target="_blank">BITS Pilani Students</a></p>
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