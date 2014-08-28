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
					<li><a href="../careers/careers.php">CAREERS</a></li>
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
            <h2 style="margin-left:40%;">Latest in GPEL</h2>
            <br/>
             <?php
						$con=mysql_connect("localhost","root","");
						mysql_select_db("gpel",$con);
						if($con)
						{
						$result=mysql_query("SELECT * FROM news ORDER BY sysid DESC ");
						$rowcount= mysql_num_rows($result);
						$result_array = array();
						while($row = mysql_fetch_array($result))
						{
							
							echo "<tr>";
							echo "<br/>";
							echo "<br/>";
							echo "<td><h3 style='margin-left:20px;'>" . $row['heading'] . "</h3></td>";
							echo "<br/>";
							echo "<td><p style='padding:0 20px 20px 20px;'>" . $row['content'] . "</p></td>";
							echo "<br/>";
							echo "<hr color='#CCCCCC' height='1px' />";
							
						}
						
						}
			?>
            
    		
				
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
					<li><a href="../careers/careers.php">Careers</a></li>
					<li><a href="../contactus/contactus.php">Contact Us</a></li>
				  </ul>
					<div class="cl">&nbsp;</div>
				</div>
                
                <div class="footer-nav1">
                <br/>
                
					<ul>
						<li><a href="../feedback/feedback.php">Feedback</a></li>
						<li><a href="../sitemap/sitemap.html">Sitemap</a></li>
						<li><a href="../dislcaimer/disclaimer.html">Disclaimer</a></li>
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