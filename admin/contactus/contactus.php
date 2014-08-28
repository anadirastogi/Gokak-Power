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
<title>View contactus</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="contactus.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"> <!-- end .header --></div>
  <div class="content">
  <p><a href="../home.php">Home</a>    <a style="float:right;" href="../logout.php">Logout</a></p>
   <?php
/* 
        VIEW.PHP
        Displays all data from 'contactus' table
*/

       if(($connection=mysql_connect("127.0.0.1","root",""))===FALSE)
		die("could not connect database");
	   if(mysql_select_db("gpel",$connection)===FALSE)
		die("could not select database");
       
	    // get results from database
        $result = mysql_query("SELECT * FROM contactus ORDER BY sysid DESC") 
                or die(mysql_error());  
                
        // display data in table
        //echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>ID</th> <th>name</th> <th>mobileno</th> <th>emailid</th> <th>message</th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['sysid'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['mobileno'] . '</td>';
				echo '<td>' . $row['emailid'] . '</td>';
				echo '<td>' . $row['message'] . '</td>';
                echo '<td><a href="delete.php?id=' . $row['sysid'] . '" onclick="return confirm(\'Confirm delete?\');" >Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?></div>
  <div class="footer"><!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
