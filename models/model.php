<?php
class model 
{ 
protected $url="";
protected $token="";
public function __construct() 
{ 
  $this->url=API_URL;
  $this->token=API_TOKEN;
} 	
public function request( $method, $params=[])
{
	$params['token']=$this->token;
	$query=http_build_query($params);

	$client=curl_init();
	curl_setopt($client , CURLOPT_URL , $this->url."?id=$method" );
	curl_setopt($client , CURLOPT_POST , 1 );
	curl_setopt($client , CURLOPT_POSTFIELDS , $query );
	curl_setopt($client , CURLOPT_RETURNTRANSFER , true );
	$res= curl_exec($client);
	curl_close($client);
	//echo $res;exit;
	$res= json_decode($res);
	return $res;
}
public function getAll($method, $params=[]) 
{ 
	$res = $this->request($method , $params);
	if ($res->status==200)
	{
		$rows = (array)$res->data->rows;
		for($i=0 ; $i<count($rows);$i++)
			$rows[$i]=(array)$rows[$i];
		return $rows;	
	} else  return 0;
		 
} 
public function getRow($method, $params=[]) 
{ 
	$res = $this->request($method , $params);
	if ($res->status==200)
	{
		$row = (array)$res->data->row;
		return $row;	
	} else  return 0;		 
} 
public function execQuery($method, $params) 
{ 
	$res = $this->request($method , $params);
	if ($res->status==200)
	      return 1;	
	else  return 0;		 
} 	
}
?>