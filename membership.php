<?php 
	session_start();
	include("inc/commonvars.php");
//	if( !isset($_SESSION['id']) || (!eregi("^$nakedurl",getenv('HTTP_REFERER'))) ) header('Location: login.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title><?php 
echo ("$companyname - membership");
?>
</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
include("inc/topmenu.php");
$fees='';
$data['action']='selectfees';
$ret=get_db_value($data);
foreach($ret['line'] as $line){
$fees.="<option value={$line['price']}>{$line['description']} - {$line['price']}</option>";
}
?>
<form action="checkout.php?action=goldmembership" method="post" style="margin: 0">
<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>
<tr><td>
<?php include("inc/membermenu.php"); ?>
</td></tr>
 <tr>
   <td align='center' valign='top'>
		<div align="justify" style="width: 400">Gold membership allows you to be <b>available for FREE</b> for other members of our community. Those interested in contacting you will be able to get your email for free. You can also hand your contact information to anyone you like, and they will write you if they want.</div>	  
	 </td>
 </tr>
 <tr><td align="center">Choose one of the following options:</td></tr>
	<tr align="center">
		<td>
			<select name="goldtype">
				<?php echo $fees; ?>
			</select>
			<input type="submit" value="Check out"/>
		</td>
	</tr>
</table> 
</form>

<?php
include("inc/bottom.php"); 
?>
</body>
</html>