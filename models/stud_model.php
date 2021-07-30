<?php
class stud_model extends model{
	public function getRows(){
		$rows= $this->getAll( "stud/indexa");
		return $rows;
	}
	public function getRowById($sid){
		$row= $this->getRow("stud/edita",['sid'=>$sid]);
		return $row;
	}	
	public function addRow($name , $avgr , $fid )
	{
		$row['sid']=0;
        $row['name']=$name;
        $row['avgr']=$avgr;
		$row['fid']=$fid;
		$res= $this->execQuery("stud/savea",array('row'=>$row));
		return $res;
	}
	public function editRow($sid,$name , $avgr , $fid )
	{
        $row['sid']=$sid;
        $row['name']=$name;
        $row['avgr']=$avgr;
		$row['fid']=$fid;
		$res= $this->execQuery("stud/savea",array('row'=>$row));
		return $res;
	}	
	public function deleteRow($sid )
	{
		$res= $this->execQuery("stud/deletea",array('sid'=>$sid));
		return $res;
	}	
}
?>