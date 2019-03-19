<?php
session_start();
include("inc/commonvars.php");
$_SESSION['logged']='off';
if(isset($_REQUEST['email'])){
     $email="";
    $password="";
    if(isset($_REQUEST['email']))$email=$_REQUEST['email'];
    if(isset($_REQUEST['password']))$password=$_REQUEST['password'];
    $data['email']=$email;
    $data['password']=$password;
    $data['action']='login';
    $line=get_db_value($data);

     if( !isset($line['lerror']) ){
       $nickname=$line['name'];
       $name=$line['name'];
       $id=$line['id'];
       $_SESSION['nickname']=$nickname;
       $_SESSION['name']=$name;
       $_SESSION['id']=$id;
      $_SESSION['logged']='on';
       $_SESSION['email']=$_REQUEST['email'];
       $_SESSION['password']=$_REQUEST['password'];
      header('Location: member_panel.php');
     };
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php
echo ("$companyname - Login");
?>
</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
include("inc/topmenu.php");
?>

<table border='0' cellpadding='0' cellspacing='5' width='768' align='center'  class='mtable'  style='font-size: 12px;'>
 <tr>
   <td height="400" align="center">
   <?php
   if(isset($_REQUEST['email'])) echo "Sorry, but e-mail or password does not match. Please try again.<br>";
   ?>
   <form action="" method="POST">
      <table border="0" class="mtable">
          <tr>
           <td><b>Email</b></td>
           <td><input type="text" name="email" value="" /></td>
           <td><a href="join.php">Join!</a></td>
           </tr>
          <tr>
           <td><b>Password</b></td>
           <td><input type="password" name="password" value="" /></td>
           <td><a href="http://singlestown.net/forgot.php">forgot?</a></td>
           </tr>
          <tr>
           <td colspan="3" align="center"><input type="submit" value="Submit" /></td>
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

