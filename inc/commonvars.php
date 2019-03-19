<?php
  $companyname="Partner site";

  $domain='http://';
  $nakedurl='http://';
  $server='singlestown.net';
  $remoteserver="http://singlestown.net/remote.php";
//**********************************************
// Here you have to place your ID and PASSWORD
//**********************************************
  $partnerid='XXX';
  $partnerpwd='XXX';
//**********************************************

  $thumb_x=100;
  $thumb_y=150;
  $photo_x=250;
  $photo_y=250;
function get_db_value( $data )
{
    global $server;
    global $remoteserver;
    global $partnerid;
    global $partnerpwd;

    $data['partnerid']=$partnerid;
    $data['partnerpwd']=$partnerpwd;
    $data = serialize( $data );
    $data = urlencode( $data );
    $length1=strlen($data)+5;

    $fp = fsockopen( $server, 80, $errno, $errstr, 200 );

    if ( !$fp )
    {
        echo 'Failed to establish connection!<br>';
        echo "Error : $errno - $errstr";
        return 0;
    }

$query= <<<EOT
POST $remoteserver HTTP/1.0
Content-Type: application/x-www-form-urlencoded
Content-Length: $length1

data=$data
EOT;
    fputs( $fp, $query );
    $s='';
    while ( !feof( $fp ) )
    {
  $s.= fgets( $fp, 4096000 );
    //echo "$s<br>";
    }
    $new_str = $s;
//    echo "query - ".$query."<br>";
//    echo "Answer - ".$s."br";
//    exit;
    list($a,$b)=explode("|answerstart|", $s, 2);
    $a=$b;
//    echo $a;
//    echo "Parsed - ".$b;
    $new_str=$b;
    fclose( $fp );
    $answer_arr = unserialize( base64_decode( $new_str ) );
//    echo "Unserialized - ".print_r($answer_arr);
      if(isset($answer_arr['error'])){
        echo "<br><div align='center'>".$answer_arr['error']."</div><br>";
        exit;
      };
    return $answer_arr;
}
?>