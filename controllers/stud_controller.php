<?php
class stud_controller extends controller{
	
	public function index()
	{
	    $rows = $this->_model->getRows(); 	
	    $this->_setView("index");	
		$this->_view->set("rows" , $rows);
		$this->_view->set("title" , "لیست دانشجویان");
		return $this->_view->output();
	
	}
	public function delete($sid)
	{
	  $sid=intval($sid);	
	  $this->_model->deleteRow($sid);
	  return $this->index();	
	}	
	public function add()
	{
		$this->_setView("add");
		$this->_view->set("title" , "افزودن دانشجو");
		return $this->_view->output();
	}
	public function edit($sid)
	{
		$sid=intval($sid);
		$row= $this->_model->getRowById($sid);
		$this->_setView("edit");
		$this->_view->set("row" , $row );
		$this->_view->set("title","ویرایش دانشجو ");
		return $this->_view->output();
	}	
	public function save()
	{
		$sid = $_POST['sid'];
		$name = $_POST['name'];
		$avgr = $_POST['avgr'];
		$fid  = $_POST['fid'];
		
		if ( $sid==0 )
		     $this->_model->addRow($name , $avgr , $fid );
		else $this->_model->editRow($sid,$name , $avgr , $fid );
		return $this->index();
		
	}	
}
?>