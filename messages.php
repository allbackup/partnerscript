<?php
  include("inc/commonvars.php");
  session_start();
  if( !isset($_SESSION['id']) || (!eregi("^$nakedurl",getenv('HTTP_REFERER'))) ) header('Location: login.php');

  $tid=$_SESSION['id'];
  $data['id']=$tid;
  $data['action']='messages';
  $result=get_db_value($data);
  $vkisscount=$result['vkisscount'];
  $vkissedcount=$result['vkissedcount'];
  $vkiss="";
  $vkissed="";
  $i=0;
  if(isset($result['kiss']))
  foreach($result['kiss'] as $line){
  $toid=$line['toid'];
  $cls=(($i++ % 2)==0) ? 'line1' : 'line2';
  $vkiss.=<<<EOT
  <tr class="$cls">
  <td><a href='viewprofile.php?id=$toid' target='_blank'>{$line['name']}</a></td>
  <td align="center">{$line['vk']} time(s)</td>
  <td align="center">{$line['date']}</td>
  <td align="center"><a href="javascript:void(0)"
      onclick="javascript:window.open( 'kiss.php?to=$toid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );"><img alt="sendkiss" border="0" src="images/sendkiss.gif" height="20" width="14"  align="absmiddle" /> Send kiss</a></td>
  <td align="center"><a href="javascript:void(0)"
      onclick="javascript:window.open( 'add2cart.php?action=add&amp;id=$toid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );"><img alt="add2cart" border="0" src="images/add2cart.gif" height="20" width="14"  align="absmiddle" /> Add to cart</a></td>
  </tr>
EOT;
  };
  if(isset($result['kissed']))
  foreach($result['kissed'] as $line){
  $toid=$line['fromid'];
  $cls=(($i++ % 2)==0) ? 'line1' : 'line2';
  $vkissed.=<<<EOT
  <tr class="$cls">
  <td><a href='viewprofile.php?id=$toid' target='_blank'>{$line['name']}</a></td>
  <td align="center">{$line['vk']} time(s)</td>
  <td align="center">{$line['date']}</td>
  <td align="center"><a href="javascript:void(0)"
      onclick="javascript:window.open( 'kiss.php?to=$toid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );"><img alt="sendkiss" border="0" src="images/sendkiss.gif" height="20" width="14" /> Send kiss</a></td>
  <td align="center"><a href="javascript:void(0)"
      onclick="javascript:window.open( 'add2cart.php?action=add&amp;id=$toid', 'Cart', 'width=200,height=50,menubar=no,status=no,resizeable=no,scrollbars=yes,toolbar=no, location=no' );"><img alt="add2cart" border="0" src="images/add2cart.gif" height="20" width="14" /> Add to cart</a></td>
  </tr>
EOT;
  };
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php
echo ("$companyname - My messages");
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
  <table class="mtable" width="40%">
  <tr align="center">
  <td width="50%"><a href="inbox.php">My inbox</a></td>
  <td width="50%"><a href="newmessage.php">New message</a></td>
  </tr>
  <tr align="center">
  <td><a href="inbox.php"><img alt="myinbox" border="0" src="images/myinbox.gif" height="50" width="33" /></a></td>
  <td><a href="newmessage.php"><img alt="new message" border="0" src="images/newmessage.gif" height="50" width="33" /></a></td>
  </tr>
  </table>
</td>
</tr>
<tr><td>
<table summary="" class="mtable" width="100%" bgcolor="#000000" cellspacing="1">
<tr>
<td class="header" align="center" width="50%">You have VKissed <?php echo $vkisscount; ?> members</td>
<td class="header" align="center" width="50%">You have VKissed by <?php echo $vkissedcount; ?> members</td>
</tr>
<tr>
  <td valign="top">
    <table  class="mtable" width="100%" cellspacing="1">
    <?php echo $vkiss;?>
    </table>
  </td>
  <td valign="top">
    <table  class="mtable" width="100%" cellspacing="1">
    <?php echo $vkissed;?>
    </table>
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



