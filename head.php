<?php

require_once("libs/Smarty.class.php");

$polacz = @mysql_connect('gator3301.hostgator.com', 'rafalxpl_v3d', 'kajakarluk2013') or die ("Nie udalo sie polanczyc z baza");

mysql_select_db ("rafalxpl_20200524-baza-v3d") or die ("Nie Udalo sie wybrac bazy");

$result = mysql_query("SELECT * FROM baza");

$row  = mysql_fetch_row($result);

$smarty = new Smarty();

$smarty->compile_check = true;          // sprawdza czy zosta³o coœ zmienione

$smarty->debugging = false;             // daje nam ogl¹d na zmienne

$smarty->template_dir = 'templates/';  // katalog szablonów

$smarty->compile_dir = 'templates_c/'; //katalog na skompilowane szablony

$smarty->cache_dir = 'cache/';         //katalog na cache

$smarty->config_dir = 'configs/';      //katalog konfiguracyjny

$subpage = isset($_GET['p']) ? $_GET['p'] : 'index';

$data = array(

'nav' => array(

'job-projects' => 'PROJECTS',

'about' => 'ABOUT',

'design_lab' => "LAB",  

'contact' => 'CONTACT',

),

'subpage' => $subpage,

);

if (!array_key_exists($subpage, $data['nav']))

$data['subpage'] = 'notfound';

// ustawiamy stałki

$pageurl = 'http://rafalkarluk.com/v3d/index.php?';

$thumb = 'projects/v3d/';

$wthumb = 'projects/wtm/';

$wtmurl = 'https://bit.ly/2dfl2p0';



$img = 'http://rafalkarluk.com/v3d/system/images/portfolio/';

$img_size = 'width:1000px; height:auto;';

$rolloverwrapper = 'background-color: rgba(0, 0, 0, 0.6); top: 0px; left: 0px; opacity: 0; width: 100%; height: 100%;';

$animationImage = 'margin-left: 0px; margin-top: 0px; display: none; width: 100%; max-width: 100%; height: auto;';



$smarty->assign('pageurl', $pageurl);



$smarty->assign('thumb', $thumb);

$smarty->assign('wthumb', $wthumb);

$smarty->assign('wtmurl', $wtmurl);



$smarty->assign('img', $img);

$smarty->assign('rolloverwrapper', $rolloverwrapper);

$smarty->assign('animationImage', $animationImage);

// ustawiamy dane do subpages

$dane = array ("Tresc" => "Test1");

$smarty->assign('dane', $dane);

// ustawiamy menu

$smarty->assign('menupolewej', "menu-en"); 

$smarty->assign('chapter_id', $_GET['chapter_id']);

// ustawiamy musze to sprawdzic

$smarty->assign('data', $data);

$smarty->assign('pro', $pro);

$smarty->assign('msg', $result);

?>

