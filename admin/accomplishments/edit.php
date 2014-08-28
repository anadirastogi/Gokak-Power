<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link href="edit.css" rel="stylesheet" type="text/css" />
<?php
session_start();
if($_SESSION["authenticated"] !== TRUE){
    header('../admin.php');}


 function renderForm($sysid,$name, $heading, $accomplishments, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit accomplishments</title>
 </head>
 <body>
 <div class="container">
  <div class="header"><!-- end .header --></div>
  <div class="content">
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="sysid" value="<?php echo $sysid; ?>"/>
 <div>
 <p><strong>ID:</strong> <?php echo $sysid; ?></p>
 <strong>name: *</strong> <input type="text" name="name" value="<?php echo $name; ?>"/><br/>
 <strong>heading: *</strong> <input type="text" name="heading" value="<?php echo $heading; ?>"/><br/>
 <strong>accomplishments: *</strong> <textarea name="accomplishments"><?php echo $accomplishments; ?></textarea><br/>
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
     <!-- end .content --></div>
  <div class="footer"><!-- end .footer --></div>
  <!-- end .container --></div>


 </body>
 </html> 
 
 <?php
 }


 if(($connection=mysql_connect("127.0.0.1","root",""))===FALSE)
   die("could not connect database");
 if(mysql_select_db("gpel",$connection)===FALSE)
	die("could not select database");
       
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['sysid']))
 {
 // get form data, making sure it is valid
 $sysid = $_POST['sysid'];
 $name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
 $heading = mysql_real_escape_string(htmlspecialchars($_POST['heading']));
 $accomplishments = mysql_real_escape_string(htmlspecialchars($_POST['accomplishments']));
 
 // check that heading/accomplishments fields are both filled in
 if ($heading == '' || $accomplishments == '' || $name == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($sysid, $heading, $accomplishments, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE accomplishments SET name='$name', heading='$heading', content='$accomplishments' WHERE sysid='$sysid'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: ./accomplishments.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error! ccccc';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
 {
 // query db
 $sysid = $_GET['id'];
 $result = mysql_query("SELECT * FROM accomplishments WHERE sysid=$sysid")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $name = $row['name'];
 $heading = $row['heading'];
 $accomplishments = $row['content'];
 
 // show form
 renderForm($sysid, $name, $heading, $accomplishments, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error! ffffff';
 }
 }
?>
    

