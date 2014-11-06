<?php
include $g['dir_layout'].'/_var/_var.php';

// 언어셋
include getLangFile($g['dir_layout'].'_languages/lang.',($_HS['lang']?$_HS['lang']:$d['admin']['syslang']),'.php');

// 레이아웃에 포함된 메인페이지 사용할 경우
if (strstr($g['main'],$g['dir_layout']) && !$prelayout)
{
	$d['layout']['php'] = $d['layout']['dir'].'/home.php';
}

if (isset($layoutPage))
{
	$g['main'] = $g['dir_layout'].'_pages/'.$layoutPage.'.php';
	if (strpos($layoutPage,'jax/'))
	{
		include $g['main'];
		exit;
	}
	else {
		$g['dir_module_mode'] = $g['dir_layout'].'_pages/'.$layoutPage;
		$g['url_module_mode'] = $g['url_layout'].'/_pages/'.$layoutPage;
	}
}
?>