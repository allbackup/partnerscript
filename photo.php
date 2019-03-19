<?php
	session_start();
//	header ("Content-type: image/gif");
	include("inc/commonvars.php");
  $data['id']=$_REQUEST['id'];
  $data['photo']=$_REQUEST['photo'];
  $data['action']='photo';
  $line=get_db_value($data);
	if(!isset($_REQUEST['h']))
  echo($line['p']);
	if(isset($_REQUEST['h'])){
		$tx=$_REQUEST['w'];
		$ty=$_REQUEST['h'];
				$im=imagecreatefromstring($line['p']);
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
				imagejpeg($nim, '', 100);
			}
?>