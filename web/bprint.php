<?php
$DB_SERVER='localhost'; 
$DB_NAME='phpsols';  
$DB_USER='root';
$DB_PASS='xampplily';
$STABLE="leaveword";
$sql = "select * from $STABLE order by id desc"; 
$connect=mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or die("连接数据库失败！");   
$db=mysql_select_db($DB_NAME,$connect)or die ("选择失败");
$query=mysql_query($sql,$connect)or die("不能连接到leaveword");
if(!$query)
{print"没有留言";}
else{
while($list = mysql_fetch_array($query))
{
print"
<table width=100% border= 0 cellspacing=0 cellpadding=0>
<table width=85% border= 2 cellspacing=0 cellpadding=0 bgcolor=#ffffff>
<tr> 
<a href=delete.php?upperid=$list[id];?>
>删除</a>
</tr>
<tr>
<td height=25%><font color =BLUE>$list[name] </font>
<td height=75%><font color =BLUE>主题：$list[title] </font></tr>
<tr>
<td height=100%><font color =#000000>内容：<br>$list[content] </tr>
<br>
</table>";
}
}
?>