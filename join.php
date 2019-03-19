<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>
	<?php 
  include("inc/commonvars.php");
	$page=1;
	if (isset($_REQUEST['page'])) $page=$_REQUEST['page'];
  echo("$companyname - Registration step $page");
  ?>
</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
include("inc/topmenu.php");
?>
	<?php 
		if ($page == 1):
     	echo("<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>");
			include("inc/join-step1.php");
        echo("</table>");
 		endif;
	?>
<!-- End of Page 1 -->

<!-- Start of Page 2 -->
	<?php 
		if ($page == 2): 
     	echo("<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>");
			include("inc/join-step2.php");
        echo("</table>");
		endif;
	?>
	<?php 
		if ($page == 3): 
     	echo("<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>");
			include("inc/join-step3.php");
        echo("</table>");
		endif;
	?>
<td></tr>
</table>
<?php
include("inc/bottom.php"); 
?>

</body>
</html>
