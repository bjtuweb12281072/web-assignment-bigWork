<?php
$name = $_POST["name"];
$password = $_POST["password"];
$identity=$_POST["identity"];

$DB_SERVER='localhost'; 
$DB_NAME='phpsols';  
$DB_USER='root';
$DB_PASS='xampplily';
if($identity=="mem")
{
	$STABLE="user";
	$sql = "insert into $STABLE values('','$name','$password');"; 
	$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("连接数据库失败！");   
	$db=mysql_select_db($DB_NAME,$connect)or die ("选择失败");
	$query=mysql_query($sql,$connect)or die("不能连接到uer");
	if(!$query){
		print"注册会员错误！";
		include"reg.php";
	}
	else{
		print "注册会员成功！";
		include"login.php";
	}
}
else{
	$STABLE="manage";
	$sql = "insert into $STABLE values('','$name','$password');"; 
	$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("连接数据库失败！");   
	$db=mysql_select_db($DB_NAME,$connect)or die ("选择失败");
	$query=mysql_query($sql,$connect)or die("不能连接到uer");
	if(!$query){
		print"注册管理员错误！";
		include"reg.php";
	}
	else{
		print "注册管理员成功！";
		include"login.php";
	}

}

?>