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
	$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("�������ݿ�ʧ�ܣ�");   
	$db=mysql_select_db($DB_NAME,$connect)or die ("ѡ��ʧ��");
	$query=mysql_query($sql,$connect)or die("�������ӵ�uer");
	if(!$query){
		print"ע���Ա����";
		include"reg.php";
	}
	else{
		print "ע���Ա�ɹ���";
		include"login.php";
	}
}
else{
	$STABLE="manage";
	$sql = "insert into $STABLE values('','$name','$password');"; 
	$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("�������ݿ�ʧ�ܣ�");   
	$db=mysql_select_db($DB_NAME,$connect)or die ("ѡ��ʧ��");
	$query=mysql_query($sql,$connect)or die("�������ӵ�uer");
	if(!$query){
		print"ע�����Ա����";
		include"reg.php";
	}
	else{
		print "ע�����Ա�ɹ���";
		include"login.php";
	}

}

?>