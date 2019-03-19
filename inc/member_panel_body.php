<?php
include("inc/membermenu.php");
?>
<table style="font-size: 14;">
<tr><td align="center">
<?php 
echo "Welcome, <b>{$_SESSION['nickname']}</b>(ID-{$_SESSION['id']})";
//echo "Welcome <b>$_SESSION['nickname']</b>!(ID=$_SESSION['id'])";
?>
</td></tr>
<tr><td>
<?php
$str = <<<EOT
If you haven't uploaded all your pictures yet, please don't forget to do it! This is not necessary but please, 
keep in mind that the profiles with pictures are contacted 10 times more than the ones 
without pictures. <br />
<a href="profile_photos.php">Upload photos now!</a>
EOT;
$id=$_SESSION['id'];
$data['id']=$id;
$data['action']='mpanel';
$line=get_db_value($data);
if(isset($line['message'])) echo $line['message'];
$sexphoto=$line['sex']=='0' ? 'images/man.gif' : 'images/woman.gif';
$photo=$line['photothumb']=='0' ? "<img src='$sexphoto' alt='no pic' border='0'>" : "<img src='photo.php?photo=photothumb&id=$id&h=150&w=100'>";
$profile=$line['status']=='0' ? 'Your profile activation is in progress.' : "Active";
if($line['status']=='2') $profile="Active <img src='images/gold.gif' align='top'> <br>ends on: {$line['goldend']}"; 
?>
</td></tr>
</table>

<table class="mtable" width="100%">
<tr>
<td height="150" width="100" nowrap="" align="center">
<?php echo $photo; ?>
</td>
<td valign="top" nowrap=""><br />
	Profile status:<br />
	<?php echo $profile; ?>
</td>
<td valign="top"><br />
	<a href="membership.php">Become a Gold member now!</a>
</td>
<td nowrap="" valign="top"><br />

<b>Quick links:</b><br />
<li><a href="profile_photos.php">I want to upload my photos...</a><br /></li>
<li><a href="myprofile.php">I want to view/change details in my profile...</a><br /></li>
<li><a href="search.php">I want to conduct a detailed search...</a><br /></li>
<li><a href="viewcart.php">I want to view/checkout my shopping cart...</a><br /></li>
</td>
</tr>
</table>