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
echo ("$companyname - New message");
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
<?php 
$toemail="";

if (isset($_REQUEST['post'])){
	$tid=$_SESSION['id'];
	$data['id']=$tid;
	$data['action']='newmessage';
  $data['email']=$_REQUEST['email'];
  $data['message']=addslashes($_REQUEST['message']);
	$result=get_db_value($data);
  if( isset($result['error']) ){
  	echo("Sorry, but there is no such profile!");
  } else{
     echo("Message posted.");
  };
};
?>
</td>
</tr>
<tr>
<td align="center">
	New message:
        <input type="hidden" name="post" value="1"/>
  	   <form action="" method="post">
      	<table class="mtable" align="center">
      	<tr>
        <td align="center">Send to e-mail: &nbsp;&nbsp;<input type="text" name="email" value="<?php echo $toemail; ?>" /></td>
        </tr><tr>
        <td><textarea rows="10" cols="40" name="message"></textarea></td>
        </tr>
			<tr>
        <td align="center"><input type="submit" value="Post message"><input type="hidden" name="post" value="1"/></td>
        </tr>        
      	</table>
	  	   </form>
</td>
</tr>
</table>
<?php
include("inc/bottom.php"); 
?>

</body>
</html>
