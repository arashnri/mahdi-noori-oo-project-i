<?php
class field_model extends model{
	public function getRows(){
		$rows= $this->getAll( "field/indexa");
		return $rows;
	}
	public function getRowById($fid){
		$row= $this->getRow("field/edita",['fid'=>$fid]);
		return $row;
	}	
	public function addRow($fname )
	{
		$row['fid']=0;
        $row['fname']=$fname;

		$res= $this->execQuery("field/savea",array('row'=>$row));
		return $res;
	}
	public function editRow($fid,$fname )
	{
		$row['fid']=$fid;
        $row['fname']=$fname;

		$res= $this->execQuery("field/savea",array('row'=>$row));
		return $res;
	}	
	public function deleteRow($fid )
	{
		$res= $this->execQuery("field/deletea",array('fid'=>$fid));
		return $res;
	}	
}
?>