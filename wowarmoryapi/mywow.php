<?php
    $GLOBALS['wowarmory']['db']['driver'] = 'mysql'; // Dont change. Only mysql supported so far.
    $GLOBALS['wowarmory']['db']['hostname'] = '127.0.0.1'; // Hostname of server. 
    $GLOBALS['wowarmory']['db']['dbname'] = 'test_db'; //Name of your database
    $GLOBALS['wowarmory']['db']['username'] = 'root'; //Insert your database username
    $GLOBALS['wowarmory']['db']['password'] = 'root'; //Insert your database password
    // Only use the two below if you have received API keys from Blizzard.
   // $GLOBALS['wowarmory']['keys']['private'] = ''; // if you have an API key from Blizzard
  //  $GLOBALS['wowarmory']['keys']['public'] = ''; // if you have an API key from Blizzard
    include('BattlenetArmory.class.php'); //include the main class 
	 // Load the class and define the realm and region 
    $armory = new BattlenetArmory('CN','甜水绿洲'); 

    // Use below if emblem doesn't work but you don't get any
    // usable information on what the problem is.
    // $armory->debug('emblem',TRUE)

    // Enable this is if toons with special characters break the API.
    // $armory->UTF8(TRUE);

    // Set the locale. Will default back to region default if not defined. English normally.
    // us.battle.net: en_US, es_MX
    // eu.battle.net: en_GB, es_ES, fr_FR, ru_RU, de_DE
    // kr.battle.net: ko_KR
    // tw.battle.net: zh_TW
    // battlenet.com.cn: zh_CN
    $armory->setLocale('zh_CN');

    // To reset back to default server locale
   // $armory->setLocale(FALSE);

    // To exclude some fields from characters to load.
    $armory->characterExcludeFields(array('achievements','quests')); 
    // To reset the exclude list to not exclude anymore
    $armory->characterExcludeFields(FALSE); 

    // Load all the guild data into an object. This is NOT an array 
    $guild = $armory->getGuild('神域'); 
	//$test=$guild->test();
	//print_r($test);
	$achievements = $guild->getAchievements('timestamp','desc');
	print_r(date("Y-m-d",1372090150));
	 print_r($achievements);
	//print_r($achievements);
    // Load all the character data into an object. This is NOT an array 
    $character = $armory->getCharacter('风暴的召唤'); 
	//echo $character;
	// Return the amount of achievement points for the loaded character
  //$factionname = $character->getFactionName();
	//print_r($factionname);
	//$achievementpoints = $character->getAchievementPoints();
	//print_r($achievementpoints);
	 $achievements = $character->getAchievements();
	print_r($achievements);
	
?>