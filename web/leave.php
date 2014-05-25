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
$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("连接数据库失败！");   
$db=mysql_select_db($DB_NAME,$connect)or die ("选择失败");
$query=mysql_query($sql,$connect)or die("不能连接到uer");
$info=mysql_fetch_array($query);
if($query){
echo"<script>alert('留言发表成功！');</script>";header("Location:"."a.php");
}else{
echo"<script>alert('留言发表失败！');history.back();</script>";}
?>
