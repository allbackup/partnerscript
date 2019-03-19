<?php  
   include("inc/commonvars.php");
	 $id=$_REQUEST['id'];
   $data['action']='allphotos';
   $data['id']=$_REQUEST['id'];
	 $line=get_db_value($data);
	 $nickname=$line['nickname'];
	 $sexphoto=$line['sex']=='0' ? 'images/man.gif' : 'images/woman.gif';
	 $photo="<img src='$sexphoto' alt='no pic' border='0'>";

	 if($line['photothumb']!='0') $photothumb="<img src='photo.php?photo=photothumb&id=$id' border='0'>";
	 else $photothumb=$photo;
	 if($line['photo1']!='0') $photo1="<img src='photo.php?photo=photo1&id=$id' border='0'>";
	 else $photo1=$photo;
	 if($line['photo2']!='0') $photo2="<img src='photo.php?photo=photo2&id=$id' border='0'>";
	 else $photo2=$photo;
	 if($line['photo3']!='0') $photo3="<img src='photo.php?photo=photo3&id=$id' border='0'>";
	 else $photo3=$photo;
	 if($line['photo4']!='0') $photo4="<img src='photo.php?photo=photo4&id=$id' border='0'>";
	 else $photo4=$photo;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title><?php echo $nickname; ?> - All photos</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" summary="" class="mtable" align="center">
<tr>
<td align="center" colspan="4"><?php echo $photothumb; ?></td>
</tr>
<tr>
<td align="center"><?php echo $photo1; ?></td>
<td align="center"><?php echo $photo2; ?></td>
<td align="center"><?php echo $photo3; ?></td>
<td align="center"><?php echo $photo4; ?></td>
</tr>
</table>
</body>
</html>
