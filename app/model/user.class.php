<?php
require_once ("../../db/db.class.php");

class User {
	
	public $userName = NULL;
	public $password = NULL;
	public $name = null;
	public $sex = null;
	public $mobile= null;
	public $webChatId = null;
	
	
	/**
	 * 构造函数
	 */
	public function __construct() {
		$a=func_get_args();  // 数组 array
        $i=func_num_args();  // 参数个数
        
        if(method_exists($this,$f='__construct'.$i)){    //检查类方法是否存在
          call_user_func_array(array($this,$f),$a);     // 返回参数个数对应的函数
      } 
	}
	
	// 两个参数
	public function __construct2($userName, $password) {
		$this->userName = $userName;
		$this->password = $password;
	}
	
	// 5个参数
	public function __construct5($userName,$password,$name,$sex,$mobile) {
		$this->userName = $userName;
		$this->password = $password;
		$this->name = $name;
		$this->sex = $sex;
		$this->mobile= $mobile;
	}
	
	// 6个参数
	public function __construct6($userName,$password,$name,$sex,$mobile,$webChatId) {
		$this->userName = $userName;
		$this->password = $password;
		$this->name = $name;
		$this->sex = $sex;
		$this->mobile= $mobile;
		$this->webChatId = $webChatId;
	}

	public function insert() {
		$db = new DB();
		$fields = array("userName","password","name","sex","mobile","webChat_id");
		$resultid = $db->insertData("user", $fields, array (
			$this->userName,
			$this->password,
			$this->name,
			$this->sex ,
			$this->mobile,
			$this->webChatId,
		));
		return $resultid;
	}

	public function isRegister(){
		$db = new DB();
		$userName = $this->userName;
		$password = $this->password;
		@ $data = $db->getObjListBySql("SELECT * FROM user WHERE userName = '$userName' and password = '$password' ");
		if (count($data) != 0)
			return true;
		else
			return false;	
	}

	public static function getUserById($uid) {
		$db = new DB();
		return $db->getDataByAtr("user", 'id', $uid);
	}

	public static function getUserByName($userName) {
		$db = new DB();
		@ $data = $db->getObjListBySql("SELECT * FROM user WHERE userName = '$userName'");
		if (count($data) != 0)
			return $data;
		else
			return null;
	}

	public static function getAllUser() {
		$db = new DB();
		@ $data = $db->getObjListBySql("SELECT * FROM user");
		if (count($data) != 0)
			return $data;
		else
			return null;
	}

	public static function deleteByUid($uid) {
		$admin = Admin :: getAdminById($uid);
		$db = new DB();
		if ($db->delete("user", "uid", $uid))
			return true;
		else
			return false;
	}
}
?>