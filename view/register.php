<!DOCTYPE html>
<html>
<head>
<title>东莞市人民医院</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/NewGlobal.css" rel="stylesheet" />

	<script type="text/javascript" src="../js/zepto.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
</head>
<script type="text/javascript">
//	function checkRegister(){
//		var userName = document.getElementById("userName").value;
//		if(userName ==''){
//			alert("用户名不能为空");
//			return false;
//		}
//		
//	}

	function checkUserName(){
		 var userNameError=document.getElementById("userNameError");
     	var userName=document.getElementById("userName").value;
     	if(userName ==''){
     		userNameError.innerHTML= "邮箱格式不正确！";
     	}else{
     	}
	}


</script>

<body>
	<div class="header">
		<a href="../index.jsp" class="home"> <span
			class="header-icon header-icon-home"></span> <span
			class="header-name">主页</span> </a>
		<div class="title" id="titleString">注册</div>
		<a href="javascript:history.go(-1);" class="back"> <span
			class="header-icon header-icon-return"></span> <span
			class="header-name">返回</span> </a>
	</div>


	<div class="container width80 pt20">
		<form name="register" method="post"
			action="../app/controller/registerAction.php"
			id="aspnetForm" class="form-horizontal" onclick = "return checkRegister()">
			<div>
				<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET"
					value="" /> <input type="hidden" name="__EVENTARGUMENT"
					id="__EVENTARGUMENT" value="" /> <input type="hidden"
					name="__VIEWSTATE" id="__VIEWSTATE"
					value="/wEPDwUKLTE4MTUwOTMzMA9kFgJmD2QWAgIBD2QWAgIBD2QWAgILDxYCHgRocmVmBSwvUmVnLmFzcHg/UmV0dXJuVXJsPSUyZk1lbWJlciUyZkRlZmF1bHQuYXNweGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JTYXZlQ29va2ll5P758eqt18XT06y04yVxkKJyzYw=" />
			</div>

			<script type="text/javascript">
				//         
				var theForm = document.forms['aspnetForm'];
				if (!theForm) {
					theForm = document.aspnetForm;
				}
				function __doPostBack(eventTarget, eventArgument) {
					if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
						theForm.__EVENTTARGET.value = eventTarget;
						theForm.__EVENTARGUMENT.value = eventArgument;
						theForm.submit();
					}
				}
				//
			</script>


			<!-- <div>

				<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
					value="/wEWBQLZmqilDgLJ4fq4BwL90KKTCAKqkJ77CQKI+JrmBdPJophKZ3je4aKMtEkXL+P8oASc" />
			</div> -->
			<div class="control-group" name = "a">
				账号：<input name="userName" type="text"
					id="userName" class="input width100 "
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入身份证" onblur="checkUserName()"/>
			</div>
			<div  id="userNameError" align = "center"> </div>  
			<div class="control-group">
				密码：<input name="password" type="password"
					id="password" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入密码" />
			</div>
			<div class="control-group">
				姓名：<input name="name" type="text"
					id="name" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入姓名" />
			</div>
			<div class="control-group">
				性别：<input name="sex" type="text"
					id="sex" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入性别" />
			</div>
			
			<div class="control-group">
				联系方式：<input name="mobile" type="text"
					id="mobile" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入手机号码" />
			</div>
			<div class="control-group">
				<span class="red"></span>
			</div>
			
			<a><span class="fade" id="pwdError"></span></a>
			
			<div class="control-group">
				<button onclick="__doPostBack('ctl00$ContentPlaceHolder1$btnOK','')"
					id="ctl00_ContentPlaceHolder1_btnOK"
					class="btn-large green button width100">立即注册</button>
			</div>
			
		</form>
	</div>


	<div class="footer">
		<div class="gezifooter">

			<a href="<%=basePath%>PhoneWeb/WebTwo/login.jsp" class="ui-link">立即登陆</a> <font color="#878787">|</font>
			<a href="<%=basePath%>PhoneWeb/WebTwo/register.jsp" class="ui-link">免费注册</a> <font color="#878787">|</font>


			<a href="<%=basePath %>jsp/page/login.jsp" class="ui-link">电脑版</a>
		</div>
		<div class="gezifooter">
			<p style="color:#bbb;"> &copy; 版权所有 2012-2014</p>
		</div>
	</div>

</body>
</html>