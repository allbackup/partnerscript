<?php
if( isset($_REQUEST['action']) && ('add'==$_REQUEST['action']) ){
  $tid=$_REQUEST['id'];
  setcookie("profiles[$tid]",$tid,mktime(0,0,0,1,1,2020));
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Cart</title>
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
Succesfully added!
</td></tr>
</table>
</body>
</html>

