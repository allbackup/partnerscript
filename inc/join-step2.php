<?php
	$data['request']=$_REQUEST;
	$data['id']='0';
	$data['action']='newprofile';
  $result = get_db_value($data);
if(!isset($result['error']))
echo <<<EOT
 <tr>
   <td colspan="3" height="400" align="center">
     Congratulations! You have registered on <b>SinglesTown</b>.<br />
		<a href="profile_photos.php"><b>upload your photos</b></a> now?<br />
		<a href="login.php"><b>Login</b></a>
 </td>
EOT;
else
echo <<<EOT
 <tr>
   <td colspan="3" height="400" align="center">
     Registration error! Email already exists Please <a href="join.php">try again.</a>
 </td>
EOT;
 
?>
 
