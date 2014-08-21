<?php
	header("Content-Type:text/heml;charset=utf8");
	
	require_once("../model/user.class.php");

	$user = new User("HellWorld","123");
	$usr->insert();
	
	$users = User::getAllUser();
	
	foreach($users as $u){
		echo "<br/>".$u->name."<br/>".$u->password."<br/>"; 
	}
	
?>
