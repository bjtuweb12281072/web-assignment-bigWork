<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>注册界面</title>
<link href="slogin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(%E4%B9%A6%E4%B8%8E%E7%8E%AB%E7%91%B0.jpg);
	background-repeat: no-repeat;
	margin-left: 450px;
	margin-top: 150px;
	margin-right: 100px;
	margin-bottom: 100px;
}
.STYLE1 {font-size: 16px}

-->
</style></head>

<body>
  <form method="post" action="check.php">
  <p><span class="slogin">注册</span><br/>
</p>
  <p class="STYLE1">姓 名：
    <input type="text" name="name" >
    </p>
  <p class="STYLE1">密 码：
  <input type="text" name="password" >
  </p>
  <p>
    <input type="radio" name="identity" value="adm">
    管理员
    <input type="radio" name="identity" value="mem">
  会员</p>
  <p><input type="submit" name="btn" value="注册"> <a href="login.php">登录</a></p>
  
</body>
</html>