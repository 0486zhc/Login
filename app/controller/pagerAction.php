<?php
	include_once("../model/pager.class.php");
	require_once("../model/user.class.php");
	define('pageSize',2);
	
	echo pageSize;
	
	$CurrentPage = isset ($_GET['page']) ? $_GET['page'] : 1;   
	echo "分页".$CurrentPage ;
	echo "<br/>";
	
	$users = User::getUsersPage( ($CurrentPage-1) * pageSize , pageSize);   // 获得对象
	foreach($users as $user){
		echo $user->userName;
		echo "<br/>"; 
	}
	
	echo "总记录数".User::getUsersCount();
	$usersCount = User::getUsersCount();           // 获得记录数
	$myPage = new pager($usersCount, intval($CurrentPage),pageSize);   // 尾页值
	$pageStr = $myPage->GetPagerContent();
	echo $pageStr;
	
?>   

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.2.0" />
	<title>用户</title>
</head>
<body>
	<table align="center">
	<tr>
		<td>序号</td>
		<td>账号</td>
		<td>真实姓名</td>
		<td>性别</td>
		<td>手机号</td>
		<td>注册时间</td>
		<td>备注</td>
		
	</tr>
	<?php 
		foreach($users as $user){
			echo "<tr>";
			echo "<td>".$user->userName."</td>";
			echo "<td>".$user->userName."</td>";
			echo "<td>".$user->name."</td>";
			echo "<td>".$user->sex."</td>";
			echo "<td>".$user->mobile."</td>";
			echo "<td>".$user->mobile."</td>";
			echo "<td>".$user->mobile."</td>";
			echo "</tr>";
		}
		
	?>
	<tr>
		<td colspan="7">
			<?php echo $pageStr."总记录数：".$usersCount?>
		</td>
	</tr>
</table>

</body>
</html>