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
	$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("�������ݿ�ʧ�ܣ�");   
	$db=mysql_select_db($DB_NAME,$connect)or die ("ѡ��ʧ��");
	$str="select count(*) from $STABLE where name='$name'and password='$password';";
	$query=mysql_query($str,$connect)or die("�޷�ִ��SQL���");
	list($mycount)=mysql_fetch_row($query);
	if($mycount==0){
		echo"�˺Ż�������󣡣�";
		include "login.php";
		exit;
	}
	else{
		header("Location:"."a.php?name=$name");
		}
}
else{
	$STABLE="manage";
	$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("�������ݿ�ʧ�ܣ�");   
	$db=mysql_select_db($DB_NAME,$connect)or die ("ѡ��ʧ��");
	$str="select count(*) from $STABLE where name='$name'and password='$password';";
	$query=mysql_query($str,$connect)or die("�޷�ִ��SQL���");
	list($mycount)=mysql_fetch_row($query);
	if($mycount==0){
		echo"�˺Ż�������󣡣�";
		include "login.php";
		exit;
	}
	else{
		header("Location:"."b.php");
		}

}

?>