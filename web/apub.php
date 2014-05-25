<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>发表留言</title>
<link href="sbook.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
<?php
echo"你好！ 欢迎光临！";
?>
</div>

<div id="book">
<div id="content_area">
<h1>留言板</h1>
 <form method="post" action="leave.php" onSubmit="return chkinput(this)">
 <p class="STYLE1">姓名：   
          <input type="text" name="name" size="20" >
          <br/> </p>
        <p class="STYLE1">留言主题：   
          <input type="text" name="title" size="40" >
          <br/> </p>
      <p align="left" class="STYLE1">留言内容：</p>
        <textarea name="content" cols="55" rows="20"></textarea>
      
      <p>
        <input type="submit" name="submit" value="发表"> 
        <input type="reset" name="reset" value="重发"> 
  </p>
  </form>
  </div>
</div>
 </body>
</html>
