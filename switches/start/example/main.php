<?php
if(!defined('__KIMS__')) exit;

$g['cutips'] = array
(
	'127.0.0.2',
);

foreach ($g['cutips'] as $_cip)
{
	if (strpos('_'.$_SERVER['REMOTE_ADDR'],$_cip)) exit;
}
?>