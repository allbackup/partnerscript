<?php 
	include("inc/commonvars.php");
	session_start();
	$data['action']='kiss'; 
	$data['id']=$_SESSION['id']; 
	$data['to']=$_REQUEST['to'];
	get_db_value($data);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Vkiss</title>
<script type="text/javascript">
<!--
function closewin(){
	close();
};
setTimeout("closewin()",3000);
// -->
</script>
</head>
<body>
<table width="100%">
<tr><td height="50" align="center">
Succesfully sent!
</td></tr>
</table>
</body>
</html>
