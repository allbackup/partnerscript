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
echo ("$companyname - Profile photos");
?>
</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
include("inc/topmenu.php");
if( isset($_REQUEST['submit']) && ('Delete'==$_REQUEST['submit']) ){
	          $f = $_REQUEST['thumb']==10 ? 'photothumb' : 'photo'.$_REQUEST['thumb'];
            $id=$_SESSION['id'];
	          $data['id']=$id;
            $data['action']='uploadphoto';
            $data['file']=$f;
            $data['upload']=base64_encode('0');
            $result=get_db_value($data);
						$canprocess=1;
} else
if(isset($_REQUEST['thumb'])){
    switch($_REQUEST['thumb']){
       case 10:
          $file='photothumb';
        $tx=$thumb_x;
        $ty=$thumb_y;
        break;
       default:
          $file='photo'.$_REQUEST['thumb'];
        $tx=$photo_x;
        $ty=$photo_y;
        break;
     };
}
if(isset($file)){
    if(isset($HTTP_POST_FILES["$file"]['tmp_name'])){
      $file_thumb=$HTTP_POST_FILES["$file"]['tmp_name'];
      if($file_thumb!=""){
        $type=$HTTP_POST_FILES["$file"]['type'];
      /*  $f=fopen($file_thumb,"rb"); // имя файла или картинки -- открыли файл на чтение
        $upload=fread($f,filesize($file_thumb)); // считали файл в переменную
        fclose($f); // закрыли файл, можно опустить*/
            switch($type){
              case 'image/pjpeg':
                $im = @imagecreatefromjpeg($file_thumb);
               $canprocess=1;
             break;
              case 'image/x-png':
                $im = @imagecreatefrompng($file_thumb);
               $canprocess=1;
              break;
            default:
            $canprocess=0;
            };
            if($canprocess==1){
            $x=imagesx($im);
            $y=imagesy($im);
              if ($x>=$y){
                 $ratio=$x/$tx;
                $nx=$tx;
                 $ny=$y/$ratio;
              }
              if ($x<$y){
                 $ratio=$y/$ty;
                $ny=$ty;
                 $nx=$x/$ratio;
              };
              if ( ($nx>$tx) || ($ny>$ty)){
                if ($x<=$y){
                   $ratio=$x/$tx;
                  $nx=$tx;
                   $ny=$y/$ratio;
                }
                if ($x>$y){
                   $ratio=$y/$ty;
                  $ny=$ty;
                   $nx=$x/$ratio;
                };
              };
          //  if ($nx>$tx) $nx=$tx;
          //  if ($ny>$ty) $ny=$ty;
         $nim = imagecreatetruecolor($nx, $ny);
         imagecopyresampled($nim, $im, 0, 0, 0, 0, $nx, $ny, $x, $y);

         ob_start();
         imagejpeg($nim, '', 100);
         $upload=ob_get_contents();
         ob_end_clean();

         $id=$_SESSION['id'];
         $data['id']=$id;
         $data['action']='uploadphoto';
         $data['file']=$file;
         $upload=base64_encode($upload);
         $data['upload']=$upload;
         $result=get_db_value($data);
            }
        }
    }
} else $canprocess=1;
?>
<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>
<tr><td><?php
include("inc/membermenu.php");
?></td></tr>
<tr><td align="center" style="color: RED">
<?php
  if( (!isset($canprocess)) || ($canprocess==0)) echo("Sorry, but JPG and PNG only supported!");
?>
</td></tr>
<tr>
<td align="left">This is your photos management page. Here you may upload, remove and change
your photos. You may use .jpg and .png files for your pictures. There are no limits of
size or proportions, because our system will automatically resample your pictures.<br /><br />
Your thumbnail is used for search results.
</td>
</tr>
<tr><td align="center">
<table width="80%" class="mtable" cellpadding="0" cellspacing="0">
<tr>
<td height="150">
<b>Thumb</b><br />
Will be resized to 100x150 pixels.<br /><br />
<FORM name=NewThumbForm action="profile_photos.php" method="post" encType=multipart/form-data>
<INPUT type=hidden value="10" name="thumb">
<INPUT type=hidden value=2097152 name=MAX_FILE_SIZE>
New picture:<BR>
<INPUT class=no type=file name="photothumb">&nbsp;
<INPUT class=no type=submit value="Upload">
<INPUT class=no type=submit name=submit value="Delete">
</FORM>
</td>
<td align="center" valign="middle" width="100" style="border: 1 SOLID GRAY";>
<?php
$id=$_SESSION['id'];
$data['id']=$id;
$data['action']='profilephotos';
$result=get_db_value($data);
$sex=$result['sex'];
if($result['photothumb']==0) $photo="<img src='photo.php?photo=photothumb&id=$id&h=150&w=100' border='0'>";
else{
$sexphoto=$result['sex']=='0' ? 'images/man.gif' : 'images/woman.gif';
$photo="<img src='$sexphoto' alt='no pic' border='0'>";
}
echo "<a href=photo.php?photo=photothumb&id=$id target=_blank>$photo</a>";
echo "<br><a href=photo.php?photo=photothumb&id=$id target=_blank>click to enlarge</a>";
?>
</td>
</tr>

<tr>
<td height="150">
<b>Photo 1</b><br />
Will be resized to 450x450 pixels.<br /><br />
<FORM name=NewThumbForm action="profile_photos.php" method="post" encType=multipart/form-data>
<INPUT type=hidden value="1" name="thumb">
<INPUT type=hidden value=2097152 name=MAX_FILE_SIZE>
New picture:<BR>
<INPUT class=no type=file name="photo1">&nbsp;
<INPUT class=no type=submit value="Upload">
<INPUT class=no type=submit name=submit value="Delete">
</FORM>
</td>
<td align="center" valign="middle" width="100" style="border: 1 SOLID GRAY";>
<?php
if($result['photo1']==0) $photo="<img src='photo.php?photo=photo1&id=$id&h=150&w=100' border='0'>";
else{
$sexphoto=$sex=='0' ? 'images/man.gif' : 'images/woman.gif';
$photo="<img src='$sexphoto' alt='no pic' border='0'>";
}
echo "<a href=photo.php?photo=photo1&id=$id target=_blank>$photo</a>";
echo "<br><a href=photo.php?photo=photo1&id=$id target=_blank>click to enlarge</a>";
?>
</td>
</tr>

<tr>
<td height="150">
<b>Photo 2</b><br />
Will be resized to 450x450 pixels.<br /><br />
<FORM name=NewThumbForm action="profile_photos.php" method="post" encType=multipart/form-data>
<INPUT type=hidden value="2" name="thumb">
<INPUT type=hidden value=2097152 name=MAX_FILE_SIZE>
New picture:<BR>
<INPUT class=no type=file name="photo2">&nbsp;
<INPUT class=no type=submit value="Upload">
<INPUT class=no type=submit name=submit value="Delete">
</FORM>
</td>
<td align="center" valign="middle" width="100" style="border: 1 SOLID GRAY";>
<?php
if($result['photo2']==0) $photo="<img src='photo.php?photo=photo2&id=$id&h=150&w=100' border='0'>";
else{
$sexphoto=$sex=='0' ? 'images/man.gif' : 'images/woman.gif';
$photo="<img src='$sexphoto' alt='no pic' border='0'>";
}
echo "<a href=photo.php?photo=photo2&id=$id target=_blank>$photo</a>";
echo "<br><a href=photo.php?photo=photo2&id=$id target=_blank>click to enlarge</a>";
?>
</td>
</tr>

<tr>
<td height="150">
<b>Photo 3</b><br />
Will be resized to 450x450 pixels.<br /><br />
<FORM name=NewThumbForm action="profile_photos.php" method="post" encType=multipart/form-data>
<INPUT type=hidden value="3" name="thumb">
<INPUT type=hidden value=2097152 name=MAX_FILE_SIZE>
New picture:<BR>
<INPUT class=no type=file name="photo3">&nbsp;
<INPUT class=no type=submit value="Upload">
<INPUT class=no type=submit name=submit value="Delete">
</FORM>
</td>
<td align="center" valign="middle" width="100" style="border: 1 SOLID GRAY";>
<?php
if($result['photo3']==0) $photo="<img src='photo.php?photo=photo3&id=$id&h=150&w=100' border='0'>";
else{
$sexphoto=$sex=='0' ? 'images/man.gif' : 'images/woman.gif';
$photo="<img src='$sexphoto' alt='no pic' border='0'>";
}
echo "<a href=photo.php?photo=photo3&id=$id target=_blank>$photo</a>";
echo "<br><a href=photo.php?photo=photo3&id=$id target=_blank>click to enlarge</a>";
?>
</td>
</tr>

<tr>
<td height="150">
<b>Photo 4</b><br />
Will be resized to 450x450 pixels.<br /><br />
<FORM name=NewThumbForm action="profile_photos.php" method="post" encType=multipart/form-data>
<INPUT type=hidden value="4" name="thumb">
<INPUT type=hidden value=2097152 name=MAX_FILE_SIZE>
New picture:<BR>
<INPUT class=no type=file name="photo4">&nbsp;
<INPUT class=no type=submit value="Upload">
<INPUT class=no type=submit name=submit value="Delete">
</FORM>
</td>
<td align="center" valign="middle" width="100" style="border: 1 SOLID GRAY";>
<?php
if($result['photo4']==0) $photo="<img src='photo.php?photo=photo4&id=$id&h=150&w=100' border='0'>";
else{
$sexphoto=$sex=='0' ? 'images/man.gif' : 'images/woman.gif';
$photo="<img src='$sexphoto' alt='no pic' border='0'>";
}
echo "<a href=photo.php?photo=photo4&id=$id target=_blank>$photo</a>";
echo "<br><a href=photo.php?photo=photo4&id=$id target=_blank>click to enlarge</a>";
?>
</td>
</tr>
</table>
</td></tr>
</table>
<?php
include("inc/bottom.php");
?>

</body>
</html>

