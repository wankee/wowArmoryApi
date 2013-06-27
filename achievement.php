<html>
<body>
<?php include_once('decodejson.php');
//print_r($chara_achieve['achievements']);
//$url='http://www.battlenet.com.cn/api/wow/data/character/achievements';
//$achieve_json= @file_get_contents($url);
//echo $achieve_json;
//echo $achieve;
//print_r($achievements);
//print_r(array_keys($achievements));
//$ex='{"id":2144,"title":"千奇百怪的漫长旅行","points":50,"description":"完成下列世界事件成就。","reward":"奖励：紫色始祖幼龙","rewardItems":[{"id":44177,"name":"紫色始祖幼龙的缰绳","icon":"ability_mount_drake_proto","quality":4,"itemLevel":70,"tooltipParams":{},"stats":[],"armor":0}],"icon":"achievement_bg_masterofallbgs","criteria":[{"id":7553,"description":"尊敬长者","orderIndex":0,"max":1},{"id":7561,"description":"爱情冲昏头","orderIndex":1,"max":1},{"id":9880,"description":"复活节的贵族","orderIndex":2,"max":1},{"id":7555,"description":"为了孩子","orderIndex":3,"max":1},{"id":0,"description":"护焰者/护火者","orderIndex":4,"max":1},{"id":7564,"description":"酒仙","orderIndex":5,"max":1},{"id":7558,"description":"神圣之名","orderIndex":6,"max":1},{"id":7566,"description":"欢乐使者","orderIndex":7,"max":1}],"accountWide":true,"factionId":2}';
//$aa=json_decode($ex);
//print_r(array_keys($chara_achievements['achievements']));

$p=0;
$var='achi_'.$p;
$var=$$var;
//print_r(array_keys($var));
//print_r($var['id']);
//print_r($var['name']);
//print_r(array_keys($var['achievements'][0]));
// echo '<br>';
// print_r(array_keys($var['categories']));
// echo '<br>';
// print_r(array_keys($var['categories'][0]));
// echo '<br>';
// print_r($var['categories'][0]['name']);

?>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="js/achievement.js"> </script>

<style type="text/css"> 
ul.submenu{display:none;}
ul{list-style-type: none;}
#achieve{
width:100%;
}
#menu{
float:left;
}
#content{
margin-left:250px;
padding:1em;
}
</style>
</head>
<div id="achieve">
<div id="menu">
<ul>
<li onclick="getAchieve(0)"><?=$achi_0['name']?></li>
<li class="has_submenu"><?=$achi_1['name']?></li>
	<ul class="submenu" >
	<li><?=$achi_1['categories'][0]['name']?></li>
	<li><?=$achi_1['categories'][1]['name']?></li>
	<li><?=$achi_1['categories'][2]['name']?></li>
	<li><?=$achi_1['categories'][3]['name']?></li>
	<li><?=$achi_1['categories'][4]['name']?></li>
	<li><?=$achi_1['categories'][5]['name']?></li>
	</ul>
<li class="has_submenu"><?=$achi_2['name']?></li>
	<ul class="submenu">
	<li><?=$achi_2['categories'][0]['name']?></li>
	<li><?=$achi_2['categories'][1]['name']?></li>
	<li><?=$achi_2['categories'][2]['name']?></li>
	<li><?=$achi_2['categories'][3]['name']?></li>
	<li><?=$achi_2['categories'][4]['name']?></li>
	<li><?=$achi_2['categories'][5]['name']?></li>
	</ul>
<li class="has_submenu"><?=$achi_3['name']?></li>
	<ul class="submenu">
	<li><?=$achi_3['categories'][0]['name']?></li>
	<li><?=$achi_3['categories'][1]['name']?></li>
	<li><?=$achi_3['categories'][2]['name']?></li>
	<li><?=$achi_3['categories'][3]['name']?></li>
	<li><?=$achi_3['categories'][4]['name']?></li>
	<li><?=$achi_3['categories'][5]['name']?></li>
	<li><?=$achi_3['categories'][6]['name']?></li>
	<li><?=$achi_3['categories'][7]['name']?></li>
	<li><?=$achi_3['categories'][8]['name']?></li>
	<li><?=$achi_3['categories'][9]['name']?></li>
	<li><?=$achi_3['categories'][10]['name']?></li>
	<li><?=$achi_3['categories'][11]['name']?></li>
	<li><?=$achi_3['categories'][12]['name']?></li>
	<li><?=$achi_3['categories'][13]['name']?></li>
	<li><?=$achi_3['categories'][14]['name']?></li>
	</ul>
<li class="has_submenu"><?=$achi_4['name']?></li>
	<ul class="submenu">
	<li><?=$achi_4['categories'][0]['name']?></li>
	<li><?=$achi_4['categories'][1]['name']?></li>
	<li><?=$achi_4['categories'][2]['name']?></li>
	<li><?=$achi_4['categories'][3]['name']?></li>
	<li><?=$achi_4['categories'][4]['name']?></li>
	<li><?=$achi_4['categories'][5]['name']?></li>
	<li><?=$achi_4['categories'][6]['name']?></li>
	<li><?=$achi_4['categories'][7]['name']?></li>
	<li><?=$achi_4['categories'][8]['name']?></li>
	</ul>
<li class="has_submenu"><?=$achi_5['name']?></li>
	<ul class="submenu">
	<li><?=$achi_5['categories'][0]['name']?></li>
	<li><?=$achi_5['categories'][1]['name']?></li>
	<li><?=$achi_5['categories'][2]['name']?></li>
	<li><?=$achi_5['categories'][3]['name']?></li>
	</ul>
<li class="has_submenu"><?=$achi_6['name']?></li>
	<ul class="submenu">
	<li><?=$achi_6['categories'][0]['name']?></li>
	<li><?=$achi_6['categories'][1]['name']?></li>
	<li><?=$achi_6['categories'][2]['name']?></li>
	<li><?=$achi_6['categories'][3]['name']?></li>
	<li><?=$achi_6['categories'][4]['name']?></li>
	</ul>
<li><?=$achi_7['name']?></li>
<li class="has_submenu"><?=$achi_8['name']?></li>
	<ul class="submenu">
	<li><?=$achi_8['categories'][0]['name']?></li>
	<li><?=$achi_8['categories'][1]['name']?></li>
	<li><?=$achi_8['categories'][2]['name']?></li>
	<li><?=$achi_8['categories'][3]['name']?></li>
	<li><?=$achi_8['categories'][4]['name']?></li>
	<li><?=$achi_8['categories'][5]['name']?></li>
	<li><?=$achi_8['categories'][6]['name']?></li>
	<li><?=$achi_8['categories'][7]['name']?></li>
	<li><?=$achi_8['categories'][8]['name']?></li>
	<li><?=$achi_8['categories'][9]['name']?></li>
	<li><?=$achi_8['categories'][10]['name']?></li>
	<li><?=$achi_8['categories'][11]['name']?></li>
	</ul>
<li class="has_submenu"><?=$achi_9['name']?></li>
	<ul class="submenu">
	<li><?=$achi_9['categories'][0]['name']?></li>
	<li><?=$achi_9['categories'][1]['name']?></li>
	<li><?=$achi_9['categories'][2]['name']?></li>
	</ul>
<li><?=$achi_10['name']?></li>
</ul>
</div>
<div id="content">aa</div>
</div>
</body>
</html>