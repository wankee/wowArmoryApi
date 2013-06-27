<?php 
include_once('jsonexample.php');
include_once('charadata.php');
$chara_data=json_decode($chara_data,TRUE);
$data=json_decode($chara,TRUE);
//print_r($data);
$chara_guild=json_decode($chara_guild,TRUE);
//print_r($chara_guild);
$chara_talent=json_decode($chara_talents,TRUE);
//print_r($chara_talent);
//echo $chara_achievements;
$chara_achievements=json_decode($chara_achievements,TRUE);
//print_r($chara_achieve);
$achievements=json_decode($achievements,TRUE);
//print_r($achievements);
for ($i=0;$i<=10;$i++)
{
	$var_name='achi_'.$i;
	$$var_name=$achievements['achievements'][$i];
	//$temp=$$var_name;
	//print_r($temp['name']);
	//echo '<br>';
}

function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if (++$recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }
        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}

function JSON($array) {
 arrayRecursive($array, 'urlencode', true);
 $json = json_encode($array);
 return urldecode($json);
}
?>