<?php
session_start();
if( isset($_REQUEST['action']) && ('delete'==$_REQUEST['action']) ){
  $acc=$_REQUEST['acc'];
  foreach($acc as $tid){
    setcookie("profiles[$tid]","",time()-3600);
  }
  header("Location: viewcart.php");
};
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Shopping cart</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<?php
  include('inc/commonvars.php');
  $str="";
  $total=0;
  $submitdis="disabled='disabled'";
  if(isset($_COOKIE['profiles']))
  foreach($_COOKIE['profiles'] as $tid){
  $submitdis="";
  $data['id']=$tid;
  $data['action']='cart';
  $result=get_db_value($data);
  $line=$result['line'];
  $nickname=$line['name'];
  $name=$line['name'];
  $price=$line['price'];
  $sexphoto=$line['sex']=='0' ? 'images/man.gif' : 'images/woman.gif';
  $photo=$line['photothumb']=='0' ? "<img src='$sexphoto' alt='no pic' border='0'>" : "<img src='photo.php?photo=photothumb&id=$tid' border='0'>";
  $total+=$price;
  $str.= <<<EOT
  <tr align="center">
  <td><a href='viewprofile.php?id=$tid' target='_blank'>$photo</a></td>
  <td><a href='viewprofile.php?id=$tid' target='_blank'>$name</a></td>
  <td><a href='viewprofile.php?id=$tid' target='_blank'>$price</a></td>
  <td align="center"><input type='checkbox' id='check' name='acc[]' value='$tid'></td>
  </tr>
EOT;
  };
  $_SESSION['total']=$total;
?>
<body>
<?php
include("inc/topmenu.php");
?>
        <script type="text/javascript">
        <!--
        function selectall(form, ch){
              for(i=0; i<document.forms[form].elements.length; i++){
              if(document.forms[form].elements[i].id=='check')
                   document.forms[form].elements[i].checked=ch;
              };

        };
        function checkform(obj){
              for(i=0; i<obj.elements.length; i++){
              if(obj.elements[i].id=='check')
              if(obj.elements[i].checked)
                  {
                  return true;
                  };
              };
        window.alert('Please check something first!');
        return false;
        };
           // -->
           </script>
<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>
<tr><td>
<?php
if (isset($_SESSION['id'])) include("inc/membermenu.php");
?>
</td></tr>
<tr>
<td>
<form action="" name="formprofiles" onsubmit="return checkform(this)">
<table cellpadding='0' cellspacing='3' width="60%" align='center'  class='mtable'  style='font-size: 12px;'>
  <tr><td colspan="5" height="20" align="center" style="; Font-Family: Arial; ; Font-size: 14px; font-weight:bold" bgcolor="#CAB6A3">Profiles</td></tr>
  <tr align="center" style="; Font-weight: bold;">
  <td width="100">Photo</td>
  <td>Realname</td>
  <td>Price, $</td>
  <td><input type="checkbox" onclick="selectall('formprofiles', this.checked);" style="cursor: hand;"></td>
  </tr>
<?php
  echo $str;
?>
  <tr>
  <td colspan="5" align="right">
  <input type="hidden" name="action" value="delete" />
  <input type="submit" name="" value="Delete selected"/>
  </td></tr>
  <tr><td><b>Total: $<?php echo $total;?></b></td></tr>
  </table>
</form>
</td>
</tr>
<tr><td align="center">
<form action="checkout.php">
<input type="submit" <?php echo $submitdis; ?>  name="" value="Proceed" />
</form>
</td></tr>
</table>
</body>
</html>

