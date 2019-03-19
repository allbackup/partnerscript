<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php
include("inc/commonvars.php");
echo ("$companyname - View profile");
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
if(isset($_SESSION['id'])) include("inc/membermenu.php");
include("inc/fldvars.php");
$tid=$_REQUEST['id'];
$data['id']=$tid;
$data['action']='viewprofile';
$result=get_db_value($data);
$line=$result['line'];
?></td></tr>

<?php
$sex=$line['sex']=='0' ? 'Male' : 'Female';
$sexphoto=$line['sex']=='0' ? 'images/man.gif' : 'images/woman.gif';
$photo="<img src='$sexphoto' alt='no pic' border='0'>";
if($line['photothumb']!='0') $photo="<img src='photo.php?photo=photothumb&id=$tid' border='0'>";
$lf=$line['lookfor']=='0' ? 'Male' : 'Female';
$sl=$language[$line['language1']];
if(isset($language[$line['language2']]))$sl.=', '.$language[$line['language2']];
if(isset($language[$line['language3']]))$sl.=', '.$language[$line['language3']];
$etn=$line['ethnicity']=='0' ? "I will tell you later" : $line['ethnicity'];
$rel=$religions[$line['religion']];
$ms=$maritalstatus[$line['marital']];
$h=$height[$line['height']];
$b=$bodytype[$line['bodytype']];
$e=$education[$line['education']];
$i=$income[$line['income']];
$s=$smoke[$line['smoke']];
$d=$smoke[$line['drink']];
$line['wantchildren']++;
if($line['wantchildren']>4) $line['wantchildren']=0;
$wc=$wantchildren[$line['wantchildren']];
$r='';
if($line['r_act']!='0') $r.="Activity partner, ";
if($line['r_fri']!='0') $r.="Friendship, ";
if($line['r_mar']!='0') $r.="Marriage, ";
if($line['r_rel']!='0') $r.="Relationship, ";
if($line['r_rom']!='0') $r.="Romance, ";
if($line['r_cas']!='0') $r.="Casual, ";
if($line['r_tra']!='0') $r.="Travel partner, ";
if($line['r_pen']!='0') $r.="Pan Pal";
$sexphoto=$line['sex']=='0' ? 'images/man.gif' : 'images/woman.gif';
$photo1=$line['photo1']!='0' ? "<a target='_blank' href='photo.php?photo=photo1&id=$tid'><img src='photo.php?photo=photo1&id=$tid&w=100&h=150' border='0'></a>" : "<img src='$sexphoto' alt='no pic' border='0'>";
$photo2=$line['photo2']!='0' ? "<a target='_blank' href='photo.php?photo=photo2&id=$tid'><img src='photo.php?photo=photo2&id=$tid&w=100&h=150' border='0'></a>" : "<img src='$sexphoto' alt='no pic' border='0'>";
$photo3=$line['photo3']!='0' ? "<a target='_blank' href='photo.php?photo=photo3&id=$tid'><img src='photo.php?photo=photo3&id=$tid&w=100&h=150' border='0'></a>" : "<img src='$sexphoto' alt='no pic' border='0'>";
$photo4=$line['photo4']!='0' ? "<a target='_blank' href='photo.php?photo=photo4&id=$tid'><img src='photo.php?photo=photo4&id=$tid&w=100&h=150' border='0'></a>" : "<img src='$sexphoto' alt='no pic' border='0'>";
$str=<<<EOT
<tr>
<td align="center">
  <table class="mtable" width="90%" style="border: 0">
  <tr><td align="center">
    <b>{$line['name']}</b> - $sex, {$line['age']} ID({$line['id']})
  </td></tr>
  </table>
</td>
</tr>
<tr><td align="center">
  <table class="mtable" width="90%" style="border: 0">
  <tr><td align="center" bgcolor="#CAB6A3">
    <a href="javascript:void(0)"
      onclick="javascript:window.open( 'add2cart.php?action=add&amp;id=$tid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );">Add to shopping cart</a>
  </td>
  <td align="center" bgcolor="#CAB6A3">
    <a href="javascript:void(0)"
      onclick="javascript:window.open( 'kiss.php?to=$tid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );">Send virtual kiss</a>
  </td></tr>
  </table>
</td></tr>
<tr><td align="center">
  <table class="mtable" width="90%" >
  <tr>
  <td align="center" valign="middle" width="100" bgcolor="#F4EEDC">
    $photo
  </td>
  <td align="center" width="90" valign="top">
    You can get my e-mail only for ${line['price']}
  </td>
  <td align="center" valign="top" bgcolor="#F4EEDC">
    <table class="mtable" width="100%">
    <tr>
    <td>Real name</td>
    <td>{$line['name']}</td>
    </tr>
    <tr>
    <td>Location</td>
    <td>{$line['country']}, {$line['city']}</td>
    </tr>
    <tr>
    <td>Occupation</td>
    <td>{$line['occupation']}</td>
    </tr>
    <tr>
    <td>Date of birth</td>
    <td>{$line['monthofbirth']} {$line['dayofbirth']}, {$line['yearofbirth']}</td>
    </tr>
    <tr>
    <td>Children</td>
    <td>{$line['children']}</td>
    </tr>
    <tr>
    <td>Ethnicity</td>
    <td>$etn</td>
    </tr>
    <tr>
    <td>Religion</td>
    <td>$rel</td>
    </tr>
    <tr>
    <td>Marital status</td>
    <td>$ms</td>
    </tr>
    </table>
  </td>
  </tr>
  </table>
</td>
</tr>
<tr><td>
  <i>About me:</i>
</td></tr>
<tr><td height='3' bgcolor="#FFFFFF"></td></tr>
<tr><td>
  {$line['description']}
</td></tr>
<tr><td>
  <i>About you:</i>
</td></tr>
<tr><td height='3' bgcolor="#FFFFFF"></td></tr>
<tr><td bgcolor="#F4EEDC">
  {$line['partnerdescription']}
</td></tr>
<tr><td align='center'>
  <b>Other details</b>
</td></tr>
<tr><td align='center'>
  <table class='mtable' width='50%'>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Height</b></td>
    <td>$h</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Weight</b></td>
    <td>$b</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Build</b></td>
    <td>{$line['build']}</td>
    </tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Hobbies</b></td>
    <td>{$line['hobbies']}</td>
    </tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Sports</b></td>
    <td>{$line['sports']}</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Spoken languages</b></td>
    <td>$sl</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Education</b></td>
    <td>$e</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Income</b></td>
    <td>$i</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Smoking</b></td>
    <td>$s</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Drinking</b></td>
    <td>$d</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Want children</b></td>
    <td>$wc</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Looking for</b></td>
    <td>$lf</td>
    </tr>
    <tr>
    <td bgcolor="#F4EEDC" width="50%"><b>Relationship</b></td>
    <td>$r</td>
    </tr>
  </table>
</td></tr>
<tr><td align=center><b>Other photos (click to enlarge)</b></td></tr>
<tr>
  <td align=center>
    <table border=0 cellspacing=0 cellpadding=0 width='90%' align=center>
      <tr align=center>
        <td>$photo1</td>
        <td>$photo2</td>
        <td>$photo3</td>
        <td>$photo4</td>
      </tr>
    </table>
  </td>
</tr>
<tr><td align="center">
  <table class="mtable" width="90%" style="border: 0">
  <tr><td align="center" bgcolor="#CAB6A3">
    <a href="javascript:void(0)"
      onclick="javascript:window.open( 'add2cart.php?action=add&amp;id=$tid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );">Add to shopping cart</a>
  </td>
  <td align="center" bgcolor="#CAB6A3">
    <a href="javascript:void(0)"
      onclick="javascript:window.open( 'kiss.php?to=$tid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );">Send virtual kiss</a>
  </td></tr>
  </table>
</td></tr>


</table>

EOT;
echo $str;
include("inc/bottom.php");
?>

</body>
</html>


