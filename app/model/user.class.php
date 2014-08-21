<?php
require_once ("../../db/db.class.php");

class User {
	
	public $name = NULL;
	public $password = NULL;

	/**
	 * 构造函数
	 */
	public function __construct($name, $password) {
		$this->name = $name;
		$this->password = $password;
	}

	public function insert() {
		$db = new DB();
		$resultid = $db->insertData("user", array (), array (
			'',
			$this->name,
			'',
			$this->password,
			''
		));
		return $resultid;
	}

	public function isRegister(){
		$db = new DB();
		echo $this->name;
		$name = $this->name;
		$password = $this->password;
		@ $data = $db->getObjListBySql("SELECT * FROM user WHERE name = '$name' and password = '$password' ");
		if (count($data) != 0)
			return true;
		else
			return false;	
	}

	public static function getUserById($uid) {
		$db = new DB();
		return $db->getDataByAtr("user", 'id', $uid);
	}

	public static function getUserByName($name) {
		$db = new DB();
		@ $data = $db->getObjListBySql("SELECT * FROM user WHERE name = '$name'");
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