<?php
// 레이아웃에 포함된 메인페이지에 home 레이아웃 적용할 경우
if (strstr($g['main'],$g['dir_layout']) && !$prelayout)
{
	$d['layout']['php'] = $d['layout']['dir'].'/home.php';
}

if (isset($layoutPage))
{
	$g['dir_module_mode'] = $g['dir_layout'].'/_pages/'.$layoutPage;
	$g['url_module_mode'] = $g['url_layout'].'/_pages/'.$layoutPage;
	$g['main'] = $g['dir_layout'].'/_pages/'.$layoutPage.'.php';
}
?>
