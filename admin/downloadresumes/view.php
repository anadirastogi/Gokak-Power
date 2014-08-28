<?php
session_start();
if($_SESSION["authenticated"] !== TRUE){
    header('location: ../admin.php');}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Download Resumes</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="view.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"> <!-- end .header --></div>
  <div class="content">
  <p><a href="../home.php">Home</a>    <a style="float:right;" href="../logout.php">Logout</a></p>
   <?php
/* 
        VIEW.PHP
*/

       
	  $handle = opendir("../../careers/upload");
	  $names = array();
	   echo "<table border='1' cellpadding='10'>";
        echo "<tr>  <th>Name of the File</th> <th></th> <th></th></tr>";
	  while($name = readdir($handle))
	   {
       echo "<tr>";
               
                echo "'<td>$name</td>'";
                echo '<td><a href="download1.php?filename='. $name .'">download</a></td>';
                echo '<td><a href="delete.php?filename='. $name .'" onclick="return confirm(\'Confirm delete?\');" >Delete</a></td>';
                echo "</tr>"; 
			
        
	   }
	   echo "</table>";
		closedir($handle);
		
	  
        
?></div>
  <div class="footer"><!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
