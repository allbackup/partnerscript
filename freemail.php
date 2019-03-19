<?php
	session_start();
	include('inc/commonvars.php');
	$data['action']='freemail';
	$data['email']=$_SESSION['email'];
	$data['name']=$_SESSION['name'];
	$data['id']=$_REQUEST['id'];
	$line=get_db_value($data);
	if($line['status']!='2'){
		echo "You are not allowed receive mails of non-gold members!";
	}else{
		echo "Contact info was sent!";
	}
?>
