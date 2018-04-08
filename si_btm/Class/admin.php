<?php
class Admin
{
	private $admin_id;
	private $admin_password;
	
	function __construct($id, $pass)
	{
		$this->admin_id = $id;
		$this->admin_password = $pass;
	}
	
	function getAdminID()
	{
		return $this->admin_id;
	}
	
	function getAdminPassword()
	{
		return $this->admin_password;
	}
	
	static function getAdmin($db, $id)
	{
		$admin = null;
		$sql = 'SELECT * FROM admin WHERE admin_id = "' . $id . '"';
		$tabel_admin = mysqli_query($db, $sql) or die(mysqli_error($db));
		if(mysqli_num_rows($tabel_admin) > 0)
		{
			$hasil = mysqli_fetch_assoc($tabel_admin);
			$admin = new Admin($hasil['admin_id'], $hasil['admin_password']);
		}		
		$db->close();
		return $admin;
	}
	
	static function loginCheck($db, $id, $pass)
	{
		$valid = false;
		$admin = Admin::getAdmin($db, $id);
		if($admin->admin_id === $id && $admin->admin_password === $pass)
		{
			$valid = true;
			return $valid;
		}
		else
		{
			$valid = false;
			return $valid;
		}
	}
}
?>