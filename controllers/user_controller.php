<?php
class user_controller extends controller{
	
	public function login()
	{
	    $this->_setView("login");	
		$this->_view->set("title" , "ورود به سایت");
		return $this->_view->output();
	
	}
	public function check()
	{
		$uname = $_POST['uname'];
        $upass = $_POST['upass'];
		
	    $row = $this->_model->getUser($uname , $upass); 
		if ( $row )
		{
		   $_SESSION['uname'] = $uname;
			header("location:index.php?id=stud/index");
		} else echo "نام کاربری یا کلمه عبور معتبر نیست";

	
	}	
	public function logout()
	{
	    session_destroy();
	    header("location:index.php?id=user/login");
	}	
	
}
?>