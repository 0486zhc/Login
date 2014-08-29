
function checkRegister(){
	return false;
	
	
	if( checkUserName() ){
		
		return false;
	}eles{
		return false;
	}
}


function checkUserName(){
	var userName=document.getElementById("userName").value;
	var userNameError=document.getElementById("userNameError");
 	if(userName ==''){
 		userNameError.innerHTML= "账号不能为空！";
 		return false;
 	}else{
 		userNameError.innerHTML= "";
 		return true;
 	}
}

function checkPassword(){
	var password=document.getElementById("password").value;
	var passwordError=document.getElementById("passwordError");
	if(password ==''){
		passwordError.innerHTML= "密码不能为空！";
		return false;
	}else{
		passwordError.innerHTML= "";
		return true;
	}
}

function checkName(){
	var name=document.getElementById("name").value;
	var nameError=document.getElementById("nameError");
	if(name ==''){
		nameError.innerHTML= "真实姓名不能为空！";
		return false;
	}else{
		nameError.innerHTML= "";
		return true;
	}
}

function checkMobile(){
	var mobile=document.getElementById("mobile").value;
	var mobileError=document.getElementById("mobileError");
	if(mobile ==''){
		mobileError.innerHTML= "手机号不能为空！";
		return false;
	}else if(mobile.length != 11){
		mobileError.innerHTML= "手机号长度不正确！";
		return false;
	}else{
		mobileError.innerHTML= "";
		return true;
	}
}