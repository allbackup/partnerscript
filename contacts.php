<?php
session_start();
include("inc/commonvars.php");
$_SESSION['logged']='off';
if(isset($_REQUEST['email'])){
    $email=$_REQUEST['email'];
    $subject=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    $data['email']=$email;
    $data['subject']=$subject;
    $data['message']=$message;
    $data['action']='feedback';
    get_db_value($data);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>
<?php
echo ("$companyname - Contacts");
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
 <tr>
   <td height="400" align="center">
   <?php
   if(isset($_REQUEST['email'])) echo "Message is sent<br>";
   ?>
   <form action="" method="POST">
      <table border="0" class="mtable">
          <tr>
           <td colspan='2' align='center'><a href='mailto:admin@singlestown.net'>admin@singlestown.net</a> </td>
          </tr>
          <tr>
           <td colspan='2' align='center'><a href='mailto:partner@singlestown.net'>partner@singlestown.net</a> </td>
          </tr>
          <tr>
           <td colspan='2' align='center' style='color: RED;'><b>Feedback</b></td>
          </tr>
          <tr>
           <td><b>Subject</b></td>
           <td><input type="text" name="subject" value="" /></td>
          </tr>
          <tr>
           <td><b>Message</b></td>
           <td><textarea rows='10' cols='' name="message"></textarea></td>
          </tr>
          <tr>
           <td><b>Email</b></td>
           <td><input type="text" name="email" value="" /></td>
          </tr>
           <td colspan="2" align="center"><input type="submit" value="Submit" /></td>
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

