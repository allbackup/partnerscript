<?php 
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php 
include("inc/commonvars.php");
echo ("$companyname - Log out");
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
<td align="center" height="400">You have logged out!
<?php 
$_SESSION['logged']="off";
unset($_SESSION['id']);
?> 

</td>
</tr>
</table>
<?php
include("inc/bottom.php"); 
?>


</body>
</html>
