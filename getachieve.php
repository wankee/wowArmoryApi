<?php include_once('decodejson.php');
header("content-type:text/html;charset=utf-8");

//$index=$_POST[index];
//$index=0;
//$var_name='achi_'.$index;
//$var_name=$$var_name;
//$response=JSON($var_name['achievements']);
 // print_r($response); 
//output the response

$achieveCompleted=$chara_data['achievements']['achievementsCompleted'];
print_r($achieveCompleted);
foreach($achieveCompleted as  $key => &$value) {
	$value=array(
			"id" =>$chara_data['achievements']['achievementsCompleted'][$key],
			"timestamp" =>date('Y/m/d',$chara_data['achievements']['achievementsCompletedTimestamp'][$key]/1000),
			"name" =>$chara_data['achievements']['achievementsCompletedTimestamp'][$key],
			);
}
unset($value);
print_r($achieveCompleted);
$response=JSON($chara_data['achievements']['achievementsCompleted']);
//echo $response;
?>
﻿﻿
