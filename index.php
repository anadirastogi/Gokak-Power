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
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("gpel",$con);
if($con)
{
	$result=mysql_query("SELECT * FROM count WHERE name ='noofvisitors'");
	$rowcount= mysql_num_rows($result);
	if($rowcount)
	{
		$sql=mysql_query("Update count set hits=hits+1 where name='noofvisitors'");
	}
}
?>


<!-- wrapper -->
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
					<li class="active"><a href="#">HOME</a></li>
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
			<div class="slider-holder">
				
				<!-- slider -->
				<div class="slider">
					<div class="arrs">
						<a href="#" class="prev-arr"></a>
						<a href="#" class="next-arr"></a>
					</div>

					<ul>
						<li id="img1">
							<div class="slide-cnt">
                            <img src="css/images/falls-1.png"; />
								
							</div>
							
						</li>
                        <li id="img2">
							<div class="slide-cnt">
                            <img src="css/images/station.png" />
								
							</div>
							
						</li>


						<li id="img3">
							<div class="slide-cnt">
                            <img src="css/images/power-house.png" />
								
							</div>
							
						</li>

						<li id="img4">
							<div class="slide-cnt">
							<img src="css/images/bridge.png" />
									
							</div>
							
						</li>

						
					</ul>
				</div>
				<!-- end of slider -->

				<!-- thumbs -->
				<div id="thumbs-wrapper">
					<div id="thumbs">
						<a href="#img1" class="selected"><img src="css/images/thumb.png"/></a>
						<a href="#img2"><img src="css/images/thumb2.png" /></a>
						<a href="#img3"><img src="css/images/thumb3.png" /></a>
						<a href="#img4"><img src="css/images/thumb4.png" /></a>
						
					</div>
					<a id="prev" href="#"></a>
					<a id="next" href="#"></a>
				</div>
				<!-- end of thumbs -->
			</div>

			<!-- main -->
			<div class="main">

				<div class="featured">
					<h4>Welcome to <strong style="color:#7ea50f;">Gokak Power & Energy Limited.</strong> Read about our <strong style="color:#7ea50f;">mission</strong> and <strong style="color:#7ea50f;">vision.</strong>
					<a href="missionvision/missionvision.html" class="blue-btn">Our Mission & Vision</a>
				</div>

				<section class="cols">
					<div class="col">
						<h3>About Us</h3>
						<h5>Gokak Power and Energy Limited - A subsidiary company of Gokak Textiles</h5>
						<p>Gokak Power and Energy Limited(GPEL) is a subsidiary of Gokak Textiles Limited. It is one of the oldest hydroelectric power generating plants in the continent and proudly the first plant to generate hydroelectric power in Asia. <br /><br/><a href="aboutus/aboutus.html" class="more">read more</a></p>
					</div>

					<div class="col">
						<h3>Our Projects</h3>
						<img src="css/images/col-img.png" alt="" class="left"/>
						<h5>D.J. Madan Power was commissioned in 1996 , generates 2.8 MW of electricity.
 </h5>
						<div class="cl">&nbsp;</div>
						<p>Dhupdal Hydropower station (D.J.Madan Powerhouse) is situated near Dhupdal dam which is about 8km from Gokak Falls.This powerhouse is canal based & consists of 2 units of 1.4 MW each . <br /><br/><a href="operations/operations.html" class="more">read more</a></p>
					</div>

					<div class="col">
						<h3>Our Accomplishments</h3>
                        <?php
						$con=mysql_connect("localhost","root","");
						mysql_select_db("gpel",$con);
						if($con)
						{
						$result=mysql_query("SELECT heading FROM accomplishments ORDER BY sysid DESC limit 5");
						$rowcount= mysql_num_rows($result);
						$result_array = array();
						while(false !== ($row = mysql_fetch_assoc($result)))
						{
							$result_array[]=$row;
						}
						
						}
						
                        ?>
						 <ul>
                         
                       
							<li><a href="accomplishment/accomplishment.php"><?php echo substr($result_array['0']['heading'],0,50); ?></a></li>
							<li><a href="accomplishment/accomplishment.php"><?php echo substr($result_array['1']['heading'],0,50) ; ?> </a></li>
							<li><a href="accomplishment/accomplishment.php"><?php echo substr($result_array['2']['heading'],0,50) ; ?></a></li>
							<li><a href="accomplishment/accomplishment.php"><?php echo substr($result_array['3']['heading'],0,50) ; ?></a></li>
							<li><a href="accomplishment/accomplishment.php"><?php echo substr($result_array['4']['heading'],0,50) ; ?></a></li>
						</ul>
                        <a href="accomplishment/accomplishment.php" class="more">read more</a>
					</div>
					<div class="cl">&nbsp;</div>
				</section>

				<section class="entries">
					 <?php
						$con=mysql_connect("localhost","root","");
						mysql_select_db("gpel",$con);
						if($con)
						{
						$result=mysql_query("SELECT heading,content FROM news ORDER BY sysid DESC limit 1");
						$rowcount= mysql_num_rows($result);
						$result_array = array();
						while(false !== ($row = mysql_fetch_assoc($result)))
						{
							$result_array[]=$row;
						}
						
						}
						
                        ?>
					<div class="entry">
						<h3>Latest News</h3>
						<h5><?php echo $result_array[0]['heading']?> </h5>
						
						<p><?php echo substr($result_array[0]['content'],0,210);?><br/>  <br /><a href="latestnews/latestnews.php" class="more">read more</a></p>
					</div>
					<div class="entry">
						<h3>Photo Gallery</h3>

						<div class="testimonials">					
							<p><a href="gallery/gallery.html"><img src="css/images/gallery.png"/></p></a>
                            
                            <a href="gallery/gallery.html" class="more">view gallery</a>
						</div>
						
						
					</div>
					<div class="cl">&nbsp;</div>
				</section>
			</div>
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
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
				<p class="copy"> Copyright &copy; <a href="index.php">Gokak Power & Energy Limited</a><span>|</span>2013. Designed by <a href="http://bits-pilani-webd.herokuapp.com/" target="_blank">BITS Pilani Students</a></p>
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