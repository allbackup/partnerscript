<?php 
	session_start();
	include("inc/commonvars.php");
	if( !isset($_SESSION['id']) || (!eregi("^$nakedurl",getenv('HTTP_REFERER'))) ) header('Location: login.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title><?php 
echo ("$companyname - member panel");
?>
</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
include("inc/topmenu.php");
?>
<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>
 <tr>
   <td align='center' valign='top'> 
   <?php
     include('inc/member_panel_body.php');
   ?>
 </td>
 </tr>
</table> 
<?php
include("inc/bottom.php"); 
?>
</body>
</html>
