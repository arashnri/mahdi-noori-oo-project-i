<?php
class user_model extends model{
	
	public function getUser($uname , $upass)
	{
		$sql="SELECT * FROM users WHERE `uname`='$uname' and upass='$upass'";
		$row= $this->getRow( $sql);
		return $row;
	}
}
?>