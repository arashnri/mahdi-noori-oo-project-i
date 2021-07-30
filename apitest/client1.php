<?php

include("api-client.php");
$api=new APIClient();
$res=$api->request("stud/indexa",array('fid'=>2));
echo "<h2>stud/indexa</h2>";
echo $res;
$res=$api->request("field/indexa");
echo "<h2>field/indexa</h2>";
echo $res;
$res=$api->request("stud/edita",array('sid'=>100));
echo "<h2>stud/edita</h2>";
echo $res;


$row['sid']=103;
$row['name']='amin';
$row['avgr']=20;
$row['fid']=2;
$res=$api->request("stud/savea",array('row'=>$row));
echo "<h2>stud/savea</h2>";
echo $res;


?>