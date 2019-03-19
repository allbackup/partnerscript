<?php
	include("inc/commonvars.php");
	session_start();
	if( !isset($_SESSION['id']) || (!eregi("^$nakedurl",getenv('HTTP_REFERER'))) ) header('Location: login.php');
?>	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php 
echo ("$companyname - My messages");
?>
</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
include("inc/topmenu.php");
?>
<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>
<tr><td><?php
include("inc/membermenu.php");
?></td></tr>
<tr>
<td align="center">
<table class="mtable">
<?php 
	include("inc/changeprofile.php");
?>
</table>
  
</td>
</tr>
</table>
<?php
include("inc/bottom.php"); 
?>

</body>
</html>
