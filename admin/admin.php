<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Admin login</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="admin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"><!-- end .header --></div>
  <div class="content">
    <a href="../index.php"><h5 style="float:right">BACK TO WEBSITE</h5></a>
    <h1 align="center" style="margin-left:170px;">Login</h1>
    <div align="center">
      <table width="294" border="1">
	<form id="form1" name="form1" method="post" action="admin.php">
	<tr>
          <th width="314" scope="row">
            <label>
              <div align="right">user: 
                 <input type="text" name="user" id="user" />
              </div>
            </label>
          </th>
        </tr>
        <tr>
          <th scope="row">
            <label>
              <div align="right">password: 
                <input type="password" name="password" id="password" />
              </div>
            </label>
	  </th>
	</tr>
	<tr>
	  <th>
	    <div align="center">
		<input type="submit" value="submit"/>
	    </div>
	  </th>
	</tr>
	</form>
      </table>
      <br/>
      <br/>
      <a href=#><h5 align="center">Forgot your password</h5></a>
    </div>
    <p align="center">&nbsp;</p>
    <!-- end .content --></div>
  <div class="footer">
      </div>
      <!-- end .container --></div>

<script type="text/javascript">
//<![CDATA[
	
	//focus on user if empty
	if( document.forms.form1.user.value=="")
		{ document.forms.form1.user.focus();}
	else
		{document.forms.form1.password.focus();}
//]]>
</script>
<?php
	session_start();
	if(($connection=mysql_connect("127.0.0.1","root",""))===FALSE)
		die("could not connect database");
	if(mysql_select_db("gpel",$connection)===FALSE)
		die("could not select database");
	if (isset($_POST["user"])&&isset($_POST["password"]))
	{	//prepare sql
		$sql=sprintf("SELECT * FROM login WHERE user='%s'",mysql_real_escape_string($_POST["user"]));
		//execute query
		$result=mysql_query($sql);
	// check for row
	if(mysql_num_rows($result)==1)
	{
		//fetch row
		$row=mysql_fetch_assoc($result);

		//check password	
		if ($row["password"] == crypt($_POST["password"],$row["password"]))
		{
			//remember user's logged in
			$_SESSION["authenticated"]=TRUE;
			$_SESSION["user"]=$_POST["user"];
			header('Location: home.php');
			exit;
		}
		else {echo "Wrong username and/or password";}

	}	}
?>

</body>
</html>
