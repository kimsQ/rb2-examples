<?php
if (isset($layoutPage))
{
	$g['dir_module_mode'] = $g['dir_layout'].'/_pages/'.$layoutPage;
	$g['url_module_mode'] = $g['url_layout'].'/_pages/'.$layoutPage;
	$g['main'] = $g['dir_layout'].'/_pages/'.$layoutPage.'.php';
}
?>