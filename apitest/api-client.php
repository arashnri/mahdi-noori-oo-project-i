<?php
class APIClient{
protected $url="http://127.0.0.1/mvc-php-rest-api/api.php";
protected $token="123456789abcde12";
public function APIClinet($url=""){
	if($url!="") $this->url=$url;
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
	//$res= json_decode($res);
	return $res;
}
}
?>