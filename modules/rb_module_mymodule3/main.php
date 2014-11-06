<?php
if(!defined('__KIMS__')) exit;

include $g['dir_module'].'var/var.php';
$spage = $spage ? $spage : 'main';

$g['dir_module_skin'] = $g['dir_module'].'/themes/'.$d['mymodule']['theme'].'/';
$g['url_module_skin'] = $g['url_module'].'/themes/'.$d['mymodule']['theme'];
$g['img_module_skin'] = $g['url_module_skin'].'/images';

$g['dir_module_mode'] = $g['dir_module_skin'].$spage;
$g['url_module_mode'] = $g['url_module_skin'].'/'.$spage;

$g['url_reset'] = $g['s'].'/?r='.$r.'&m='.$m;
$g['push_location'] = '<li class="active">'.$_HMD['name'].'';

$g['main'] = $g['dir_module_mode'].'.php';
?>