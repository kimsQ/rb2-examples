<?php
if(!defined('__KIMS__')) exit;

$__SRC__ = str_replace('<img alt="getWidget(','<?php getWidget(',$__SRC__);
$__SRC__ = str_replace('))" ','))?><tmp ',$__SRC__);
$__SRC__ = str_replace('\'=&gt;\'','\'=>\'',$__SRC__);
$__SRC__ = str_replace('<!--?php','<?php',$__SRC__);
$__SRC__ = str_replace('?-->','?>',$__SRC__);
?>