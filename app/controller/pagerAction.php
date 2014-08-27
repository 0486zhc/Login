<?php
	include_once("../model/pager.class.php");
	$CurrentPage = isset ($_GET['page']) ? $_GET['page'] : 1;
//	//die($CurrentPage);    
//	$myPage = new pager(1300, intval($CurrentPage));          // 1300 = count(*)
//	$pageStr = $myPage->GetPagerContent();
//	echo $pageStr;    
	echo "分页".$CurrentPage ;
	$myPage = new pager(91, intval($CurrentPage));   // 获取变量的整数值
	$pageStr = $myPage->GetPagerContent();
	echo $pageStr;
	
	echo "http://www.jb51.net/article/35229.htm";
?>   