<html>
<body>
<?php include_once('decodejson.php');
header("content-type:text/html;charset=utf-8");
$Realm=$_POST[Realm];
$CharaName=$_POST[CharaName];
$url='http://www.battlenet.com.cn/api/wow/character/'.$Realm.'/'.$CharaName.'?fields=achievements';
//$url='http://www.google.com.hk/';
// $ch =curl_init();
 //$header=array("charset=utf-8");
// curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
// $http=curl_exec($ch);
// curl_close($ch);
//$returnJson = @file_get_contents($url);
//echo $returnJson.'<br>';
//$chara_achi=json_decode($returnJson,TRUE);
//print_r($chara_achi['achievements']);
//$chara_guild=@file_get_contents($url);
//echo $returnJson.'<br>';
//print_r($chara_talent['talents']['0']);
//echo '<br/>';
//print_r($chara_talent['talents']['1']);

//$dataa=array("lastModified"=>1369746760000, "name"=>风暴的召唤, "realm" =>甜水绿洲, "battlegroup"=>"Battle Group 6", "class" =>8, "race" =>5, "gender"=>0, "level" =>9, "achievementPoints" =>2180, "thumbnail"=>"lushwater-oasis/114/15952754-avatar.jpg", "calcClass" =>e);
//print_r($dataa);
//$ch=curl_init();
//$head=array(
//"Content-Type: application/json;charset=UTF-8"
//);
//curl_setopt($ch,CURLOPT_HTTPHEADER,$head);
//curl_setopt($ch,CURLOPT_URL,$url);
//curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//$http_data=curl_exec($ch);
//echo $http_data;
//echo $http_data['lastModified'];
//echo $http_data[4];
//print_r (curl_getinfo($ch));
//curl_close($ch);
?>
<p>
	<div style="font-size:200%;display:inline"><?=$data['name']?></div>
	<div style="display:inline"><?=$chara_guild['guild']['name']?></div>
</p>
<P><?=$data['level']?> <?=$data['race']?> <?=$data['class']?> <?=$data['realm']?></P>
<P><?=$data['achievementPoints']?></P>
<p><a href='achievement.php'>成就</a></p>
<p><a>宠物和坐骑</a></p>
<a>专业技能</a>
<a>声望</a>
<a>PVP</a>
<a>公会</a>
<a>挑战模式</a>
</body>
</html>