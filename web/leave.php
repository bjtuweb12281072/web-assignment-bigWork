<?php
$name = $_POST["name"];
$title = $_POST["title"];
$content=$_POST["content"];
$createtime=date("Y-m-d H:i:s");
$DB_SERVER='localhost'; 
$DB_NAME='phpsols';  
$DB_USER='root';
$DB_PASS='xampplily';
$STABLE="leaveword";
$sql = "insert into $STABLE values('','$name','$createtime','$title','$content');"; 
$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("�������ݿ�ʧ�ܣ�");   
$db=mysql_select_db($DB_NAME,$connect)or die ("ѡ��ʧ��");
$query=mysql_query($sql,$connect)or die("�������ӵ�uer");
$info=mysql_fetch_array($query);
if($query){
echo"<script>alert('���Է���ɹ���');</script>";header("Location:"."a.php");
}else{
echo"<script>alert('���Է���ʧ�ܣ�');history.back();</script>";}
?>
