<?php
	header("Content-Type:text/html;charset=utf-8");
	require_once("../model/user.class.php");
	
	$userName = $_POST["userName"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$sex = $_POST["sex"];
	$mobile = $_POST["mobile"];
	
	$user = new User($userName,$password,$name,$sex,$mobile);
	echo $user->insert();
	
	$users = User::getAllUser();
	
	foreach($users as $u){
		echo "<br/>".$u->userName."<br/>".$u->password."<br/>".$u->name."<br/>".$u->sex."<br/>".$u->mobile."<br/>"; 
	}
?>
