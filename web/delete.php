<?php
$id=$_GET["upperid"];
$DB_SERVER='localhost'; 
$DB_NAME='phpsols';  
$DB_USER='root';
$DB_PASS='xampplily';
$STABLE='leaveword';
$sql = "DELETE FROM $STABLE WHERE id='$id'"; 
$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("�������ݿ�ʧ�ܣ�");   
$db=mysql_select_db($DB_NAME,$connect)or die ("ѡ��ʧ��");
$query=mysql_query($sql,$connect)or die("�������ӵ�leaveword");
if(!$query){
echo"<script>alert('����ɾ��ʧ�ܣ�');history.back();</script>";
}
else{
echo"<script>alert('����ɾ���ɹ���');</script>";header("Location:"."b.php");
}
?>