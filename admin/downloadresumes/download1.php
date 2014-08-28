<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link href="edit.css" rel="stylesheet" type="text/css" />
<?php
session_start();
if($_SESSION["authenticated"] !== TRUE){
    header('../admin.php');}
?>

<?php
set_time_limit(0);

//path to the file.
//Your file should be in this folder only.
$file_path='../../careers/upload/'.$_REQUEST['filename'];

//Call the download function with file path,file name and file type
$name2=$_REQUEST['filename'];
download_file($file_path,$name2, 'application/pdf');

function download_file($file, $name2, $mime_type='')
{
 if(!is_readable($file)) die('File not found.');

 $size = filesize($file);
 $name = $name2 ;

 $known_mime_types=array(
 	"pdf" => "application/pdf",
 	
 );

 if($mime_type==''){
	 $file_extension = strtolower(substr(strrchr($file,"."),1));
	 if(array_key_exists($file_extension, $known_mime_types)){
		$mime_type=$known_mime_types[$file_extension];
	 } else {
		$mime_type="application/pdf";
	 };
 };

 @ob_end_clean(); 

 // required for IE, otherwise Content-Disposition may be ignored
 if(ini_get('zlib.output_compression'))
  ini_set('zlib.output_compression', 'Off');

 header('Content-Type: ' . $mime_type);
 header("Content-Disposition: attachment; filename=$name2");
 header("Content-Transfer-Encoding: binary");
 header('Accept-Ranges: bytes');
 header("Cache-control: private");
 header('Pragma: private');
 readfile($file); 
}
?>


    

