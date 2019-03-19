<?php
  session_start();
  $tid=0;
  if(isset($_SESSION['id']))  $tid=$_SESSION['id'];

if( isset($_REQUEST['action']) && ('goldmembership'==$_REQUEST['action']) ){
  include("inc/commonvars.php");

  $total=$_REQUEST['goldtype'];
  $orderid=time();
  $data['action']='goldmember';
  $data['id']=$tid;
  $data['orderid']=$orderid;
  $line=get_db_value($data);
  $sid=$line['sid'];

  header("Location: https://www.2checkout.com/cgi-bin/sbuyers/cartpurchase.2c?total=$total&cart_order_id=$orderid&sid=$sid");
  return;
};

  $total=$_SESSION['total'];
  include("inc/commonvars.php");
  if(isset($_SESSION['id'])){
   $data['id']=$_SESSION['id'];
   $data['password']=$_SESSION['password'];
   $data['action']='getemail';
   $result=get_db_value($data);
   $email=$result['email'];
  }

  if(isset($_REQUEST['email'])){
  $email=$_REQUEST['email'];
  }

  if(isset($email)){
   $data['action']='addorder';
   $data['id']=$tid;
   $data['email']=$email;
   $line=get_db_value($data);
   $sid=$line['sid'];
   $orderid=$line['orderid'];
   foreach($_COOKIE['profiles'] as $profileid){
      $data['action']='additem';
      $data['orderid']=$orderid;
      $data['profileid']=$profileid;
     get_db_value($data);
   }
    header("Location: https://www.2checkout.com/cgi-bin/sbuyers/cartpurchase.2c?total=$total&cart_order_id=$orderid&sid=$sid");
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php
echo ("$companyname - Check out");
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
if (isset($_SESSION['id'])) include("inc/membermenu.php");
?></td></tr>
<tr>
<td align="center">
</td>
</tr>
<tr>
<td align="center">
  <b>Contact info:</b>
       <form action="" method="post">
        <table class="mtable" align="center">
        <tr>
        <td align="center">Send to e-mail: &nbsp;&nbsp;<input type="text" name="email" value="" onkeyup="document.all.bsub.disabled=this.value=='';"/></td>
        </tr>
      <tr>
        <td align="center"><input type="submit" id="bsub" disabled="disabled" value="Check out"><input type="hidden" name="post" value="1"/></td>
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

