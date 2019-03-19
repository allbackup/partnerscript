<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php
include("inc/commonvars.php");
echo ("$companyname - My messages");
?>
</title>
<meta name="description" content="SinglesTown Personals - Online Dating Services for Singles. Free Personal Ads with Photos. Join Free!">
<meta name="keywords" content="personals, dating services, online personals, free personal ads, singles, software, catalog, directory, search engine, partnership, affiliates, free, reciprocal links, exchange, love, soulmates, mail order brides, girls, ladies ">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
include("inc/topmenu.php");
?>
<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>
<tr><td align="right"><?php
if (isset($_SESSION['id'])) include("inc/membermenu.php");
else echo "<a href='viewcart.php'>Shopping cart</a>";
  $qs=$_SERVER['QUERY_STRING'];
  include("inc/searchfunc.php");
  $page=$_REQUEST['page'];
   $data['action']='selectcountries';
   $line=get_db_value($data);
   foreach ($line as $arr)
   {
   $countries[$arr['id']]=$arr['nameEng'];
   }
  $data['action']='search';
  $data['request']=$_REQUEST;
  $result=get_db_value($data);
  $amount=$result['amount'];
  $result=$result['line'];


  echo "<table>";
  echo "</table>";
?>
</td></tr>
<tr>
<td align="center">
  <table class="mtable">
  <tr><td>
  <?php
  draw_bar($page, $amount, $qs);
  ?>
  </td></tr>
  </table>
</td>
</tr>
<tr>
<td>
<table  class="mtable" width='90%'>
<?php
  foreach($result as $line){
    $tid=$line['id'];
    $uid=$line['uid'];
    $gold='';
    $goldstyle='';
$addtocart=<<<EOT
<a href="javascript:void(0)"
      onclick="javascript:window.open( 'add2cart.php?action=add&amp;id=$tid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );"><img  align="absmiddle" alt="add2cart" border="0" src="images/add2cart.gif" height="20" width="14" /> Add to cart</a>
EOT;

    if($line['status']=='2'){
$addtocart=<<<EOT
<a href="javascript:void(0)"
      onclick="javascript:window.open( 'freemail.php?id={$line['id']}', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );">Free mail</a>
EOT;
    $gold='<img src="images/gold.gif" align="top">';
    $goldstyle='background-color: #FFFFCC';
    }

  $str=<<<EOT
<a href="javascript:void(0)"
      onclick="javascript:window.open( 'kiss.php?to=$tid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );"><img  align="absmiddle" alt="sendkiss" border="0" src="images/sendkiss.gif" height="20" width="14" /> Send kiss</a>
EOT;
  $str1=<<<EOT
<a href="login.php"><img  align="absmiddle" alt="sendkiss" border="0"
src="images/sendkiss.gif" height="20" width="14" /> Send kiss</a>
EOT;
  $kiss=isset($_SESSION['id']) ? $str : $str1;

    $country=$countries[$line['countryid']];
    $children=$line['children']==0 ? 'none' : $line['children'];
    $sexphoto=$line['sex']=='0' ? 'images/man.gif' : 'images/woman.gif';
    $photo="<img src='$sexphoto' alt='no pic' border='0'>";
    if($line['photothumb']!='0') $photo="<img src='photo.php?photo=photothumb&id=$tid&h=150&w=100' border='0'>";

$viewprofile="<a href='viewprofile.php?id=$tid' target='_blank'><img alt='viewprofile' border='0' src='images/viewprofile.gif' height='20' width='14' align='absmiddle' /> View profile</a>";    
    if( ($line['status']=='5') ){
$addtocart="<img  align='absmiddle' alt='add2cart' border='0' src='images/add2cart.gif' height='20' width='14' /> <span style='color: #CC0000; font-weight: bold;'> MARRIED</span>";
$kiss="<img  align='absmiddle' alt='sendkiss' border='0' src='images/sendkiss.gif' height='20' width='14' /><span style='color: #CC0000; font-weight: bold;'> ENGAGED</span>"; 
$viewprofile="<img alt='viewprofile' border='0' src='images/viewprofile.gif' height='20' width='14' align='absmiddle' /><span style='color: #CC0000; font-weight: bold;'> MARRIED</span>"; 
    }

    $str= <<< EOT
    <tr>
    <td align='center' height=150 valign='middle' width='100'><a href='viewprofile.php?id=$tid' target='_blank'>$photo</a></td>
    <td bgcolor='#EBE2C3' valign='top' width='100' style='padding-top: 3; padding-left: 5;'>
    ID - <b>$uid</b><br />
    <b>{$line['name']}</b>, {$line['age']} $gold<br />
    $country, {$line['city']}<br />
    Children: $children
    </td>
    <td style='$goldstyle'>
      <table width='100%' style='border: 0; font-size: 12px;'>
      <tr><td colspan='3'><b>I am:</b> {$line['description']} ...<a href='viewprofile.php?id=$tid' target='_blank'>more</a></td></tr>
      <tr>
      <td align='center' valign='middle'>$viewprofile</td>
      <td align='center'>$kiss</td>
      <td align='center'>$addtocart</td>
      </tr>
      <tr><td colspan='3'><b>You:</b> {$line['partnerdescription']} ...<a href='viewprofile.php?id=$tid' target='_blank'>more</a></td></tr>
      </table>
    </td>
    </tr>
EOT;
    echo $str;
  }
?>
</table>
</td>
</tr>
</table>

<?php
include("inc/bottom.php");
?>

</body>
</html>