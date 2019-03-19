<?php
		session_start();
  	if (!isset($_SESSION['lang'])):
  		$_SESSION['lang']='english.php';
  		$lang=$_SESSION['lang'];
  	else:
  		$lang=$_SESSION['lang']; 
		endif;
		
  	include('lang/lang-'.$lang);
?>