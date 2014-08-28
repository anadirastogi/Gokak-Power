    <?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/
 session_start();
if($_SESSION["authenticated"] !== TRUE){
    header('location: ../admin.php');}

 
?>

<?php 
$file_path='../../careers/upload/'.$_REQUEST['filename'];
if (file_exists($file_path)) { unlink ($file_path); 
header('location: view.php');

}

?>
