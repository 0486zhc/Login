
<!DOCTYPE html>
<html>
<head><title>
	广医微微
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css//NewGlobal.css" rel="stylesheet" />
    <script type="text/javascript" src="../js/zepto.js"></script>
</head>
<body>
 <div class="header">
 <a href="" class="home">
            <span class="header-icon header-icon-home"></span>
            <span class="header-name">主页</span>
</a>
<div class="title" id="titleString">成 功</div>
<a href="javascript:history.go(-1);" class="back">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
 </div>

	<br/>
	
	<br/>
  <div class="control-group">
         <button onclick="__doPostBack('ctl00$ContentPlaceHolder1$btnOK','')" id="ctl00_ContentPlaceHolder1_btnOK" class="btn-large green button width100"><?php echo $_GET['mess'] ?></button>
  </div>
  


  <div class="footer">
  <div class="gezifooter">
      
      <a href="login.php" class="ui-link">登录成功</a> <font color="#878787">|</font> 
       <a href="register.php" class="ui-link">免费注册</a> <font color="#878787">|</font>                 
                  

       <a href="../www.gridinn.com/@display=pc" class="ui-link">电脑版</a>
  </div>
  <div class="gezifooter">
    <p style="color:#bbb;">格子微酒店连锁 &copy; 版权所有 2012-2014</p>
  </div>
  </div>

</body>
</html>
