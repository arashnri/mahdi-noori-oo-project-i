<?php
class field_controller extends controller{
	
	public function index()
	{
	    $rows = $this->_model->getRows(); 	
	    $this->_setView("index");	
		$this->_view->set("rows" , $rows);
		$this->_view->set("title" , "لیست رشته ها");
		return $this->_view->output();
	
	}
	public function delete($fid)
	{
	  $fid=intval($fid);	
	  $this->_model->deleteRow($fid);
	  return $this->index();	
	}	
	public function add()
	{
		$this->_setView("add");
		$this->_view->set("title" , "افزودن رشته");
		return $this->_view->output();
	}
	public function edit($fid)
	{
		$fid=intval($fid);
		$row= $this->_model->getRowById($fid);
		$this->_setView("edit");
		$this->_view->set("row" , $row );
		$this->_view->set("title","ویرایش رشته ");
		return $this->_view->output();
	}	
	public function save()
	{
		$fid = $_POST['fid'];
		$fname = $_POST['fname'];
		
		if ( $fid==0 )
		     $this->_model->addRow($fname  );
		else $this->_model->editRow($fid,$fname  );
		return $this->index();
		
	}	
}
?>