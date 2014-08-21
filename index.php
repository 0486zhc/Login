<?php
/*
 * Created on 2014-8-8
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
// $x = 5;
// function myTest(){
// 	$y = 10;
// 	echo $y;
// 	global $z;
// 	$z = $y;
// }
// 
// echo $x ;
// echo myTest();
// echo $z;
 $x = 5;
 $y = 10 ;
 function test(){
 	$GLOBALS['y'] = $GLOBALS['x'];
 }
 
 test();
  echo $y;
 
 function add(){
 	static $z = 0;
 	echo $z;
 	$z++;
 	
 }
add();
add();
add(); 
 
 

$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");

print $txt1;
print "<br>";
print "Study PHP at $txt2";
print "My car is a {$cars[0]}";

?>
