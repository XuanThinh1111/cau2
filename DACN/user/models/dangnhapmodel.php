<?php
class dangnhapmodel extends Db{
	function getdangnhap($email,$password)
	{
		$sql='select * from users where email=? and password = ?';
		$arr=[$email,$password];
		return $this->selectQuery($sql, $arr);
        
	}
	
    function dangnhap($email,$password)
    {
    	$sql='select * from users where email=? and password = ?';
    	$arr=[$email,$password];
    	return $this->updateQuery($sql, $arr);
    }
    function insert($email,$password, $name, $address, $phone)
	{
		$sql="insert into users (email, password,name, address, phone) values (?,?,?,?,?)";
		$arr=[$email,$password, $name, $address, $phone];
		return $this->updateQuery($sql, $arr);
	}
	function all()
	{
		return $this->selectQuery('select * from users');
	}
}
?>