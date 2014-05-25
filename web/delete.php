<?php
$id=$_GET["upperid"];
$DB_SERVER='localhost'; 
$DB_NAME='phpsols';  
$DB_USER='root';
$DB_PASS='xampplily';
$STABLE='leaveword';
$sql = "DELETE FROM $STABLE WHERE id='$id'"; 
$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("连接数据库失败！");   
$db=mysql_select_db($DB_NAME,$connect)or die ("选择失败");
$query=mysql_query($sql,$connect)or die("不能连接到leaveword");
if(!$query){
echo"<script>alert('留言删除失败！');history.back();</script>";
}
else{
echo"<script>alert('留言删除成功！');</script>";header("Location:"."b.php");
}
?>