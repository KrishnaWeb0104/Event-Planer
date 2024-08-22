<?php
	session_start();
	$name = $_REQUEST['username']; 
	if($name==""){
		$_SESSION['nameError'] = "Please Enter Name"; 
		header("location:form.php"); 
	}else{
		echo $name;
	}
?>