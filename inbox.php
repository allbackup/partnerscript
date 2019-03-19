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
echo ("$companyname - My inbox");
?>
</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
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
<td align="center" height="400" valign="top">
<form name="formmessages"  onsubmit="return checkform(this)">
    <table class='mtable' width='90%'>
    <tr><td colspan="3" align="right"><a href="newmessage.php">New message</a></td></tr>
    <tr class="header">
    <td width="10px" style="cursor: hand;"><input type="checkbox" onclick="selectall('formmessages', this.checked);" /></td>
    <td width="10%"><b>From:</b></td>
    <td><b>Text:</b></td>
    <td width="20"><b>Reply:</b></td>
    </tr>
<?php
  $tid=$_SESSION['id'];

  if( (isset($_REQUEST['action'])) && ('delete'==$_REQUEST['action']) ){
    $acc=$_REQUEST['acc'];
    foreach($acc as $toid){
    $data['toid']=$toid;
    $data['action']='inboxdelete';
     $result=get_db_value($data);
    };
  }

  $data['id']=$tid;
  $data['action']='inbox';
  $result=get_db_value($data);
  if(0==$result['mcount']){
    echo ("You have no messages!");
  }else{
     foreach ($result['line'] as $line)
     {
        $date=$line['date'];
      $from=$line['fromid']=='0' ? 'Admin' : $line['name'];
      $href=$line['fromid']=='0' ? "mailto:$adminmail" : "viewprofile.php?id={$line['fromid']}";
      $str = <<<EOT
        <tr>
      <td><input type='checkbox' id='check' name='acc[]' value='{$line['id']}'></td>
        <td><b><a href="$href" target="_blank">$from</a></b><br />
        $date
      </td>
        <td bgcolor="WHITE">{$line['message']}</td>
      <td align="center"><a href="newmessage.php?toid={$line['fromid']}" target="_blank"><img alt="" src="images/newmessageicon.gif" border='0'/></a></td>
        </tr>
EOT;
      echo $str;
    };
  };
 ?>
     <tr>
    <td><td></td></td>
    <td align="right">
    <input type="hidden" name="action" value="delete" />
    Selected messages: <input type="submit" value="Delete" />
    </td>
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


