<link href="new.css" rel="stylesheet" type="text/css" />


<?php

session_start();
if($_SESSION["authenticated"] !== TRUE){
    header('location: ../admin.php');}


/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($name, $heading, $accomplishments, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>New Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <div class="container">
  <div class="header"><!-- end .header --></div>
  <div class="content">

  
 <form action="" method="post">
 <div>
 <strong>Name: *</strong> <input type="text" name="name" value="<?php echo $name; ?>" /><br/>
 <strong>Heading: *</strong> <input type="text" name="heading" value="<?php echo $heading; ?>" /><br/>
 <strong>accomplishments: *</strong> <textarea name="accomplishments"><?php echo $accomplishments; ?></textarea><br/>
 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
     
 </div>
 <div class="footer"><!-- end .footer --></div>
  <!-- end .container --></div>
 
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 if(($connection=mysql_connect("127.0.0.1","root",""))===FALSE)
   die("could not connect database");
 if(mysql_select_db("gpel",$connection)===FALSE)
	die("could not select database");
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
 $heading = mysql_real_escape_string(htmlspecialchars($_POST['heading']));
 $accomplishments = mysql_real_escape_string(htmlspecialchars($_POST['accomplishments']));
 
 // check to make sure both fields are entered
 if ($heading == '' || $accomplishments == '' || $name == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($name, $heading, $accomplishments, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT accomplishments SET name='$name', heading='$heading', content='$accomplishments'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: ./accomplishments.php "); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','');
 }






