<?php
	header("Content-Type:text/html;charset=utf-8");
	require_once("../model/user.class.php");

	$userName = $_POST["userName"];
	$password = $_POST["password"];
	$flag = $_POST["flag"];
	
	
	if( $userName==null || $password == null ){
		echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
	}else{
		$user = new User($userName,$password);
		$userName = $user->login();
		if( $userName == null ){
			$url = "../../view/fail.php?mess=登录失败";
			Header("Location: $url");  
		}else{
			$url = "../../view/success.php?mess=".$userName;
			Header("Location: $url");  
		}
		
		
	}

	

//	
//	$userName =  $_POST["userName"];
//	$pwd =  $_POST["password"];
//
//	echo $userName;
//	echo $pwd;
//	
//	
//    $user = $_POST["userName"];  
//    $psw = $_POST["password"];  
//    if($user == "" || $psw == "")  
//    {  
//        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
//    }  
//    else  
//    {  
//    	if(!$con){
//    		echo "链接错误";
//    	}
//    	$sql = "select * from user where name = $userName and password = $pwd";
//    	$result = mysql_query($sql) OR die ("<br/>ERROR：".mysql_error()."<br/>产生问题的SQL:".$sql);
//    	$row = mysql_fetch_array($result,MYSQL_ASSOC);
//    	if($row){
//    		echo $row['sex'];
//    	}
//    	
//    }  
//  
//	$user = new User("HellWorld","123");
//	$user->insert();
//	
//	$users = User::getAllUser();
//	
//	
//	foreach($users as $u){
//		echo "<br/>".$u->name."<br/>".$u->password."<br/>"; 
//	}
	
	
?>
