<link href="<?php echo $g['s']?>/_core/css/tree.css" rel="stylesheet">
<?php 
if ($wdgvar['smenu'] < 0)
{	
	if (strstr($c,'/'))
	{
		$wdgvar['mnarr'] = explode('/',$c);
		$wdgvar['count'] = (- $wdgvar['smenu']) - 1;
		for ($j = 0; $j <= $wdgvar['count']; $j++) $wdgvar['sid'] .= $wdgvar['mnarr'][$j].'/';
		$wdgvar['sid'] = $wdgvar['sid'] ? substr($wdgvar['sid'],0,strlen($wdgvar['sid'])-1): '';
		$wdgvar['path'] = getDbData($table['s_menu'],"id='".$wdgvar['mnarr'][$wdgvar['count']]."'",'uid,depth');
		$wdgvar['smenu'] = $wdgvar['path']['uid'];
		$wdgvar['depth'] = $wdgvar['path']['depth'];
	}
	else {
		$wdgvar['smenu'] = $_HM['uid'];
		$wdgvar['depth'] = $_HM['depth'];
		$wdgvar['sid']	 = $_HM['id'];
	}
}
else if ($wdgvar['smenu'])
{
	$wdgvar['mnarr'] = explode('/',$wdgvar['smenu']);
	$wdgvar['count'] = count($wdgvar['mnarr']);
	for ($j = 0; $j < $wdgvar['count']; $j++)
	{
		$wdgvar['path'] = getDbData($table['s_menu'],'uid='.(int)$wdgvar['mnarr'][$j],'uid,id,depth');
		$wdgvar['sid'] .= $wdgvar['path']['id'].'/';
		$wdgvar['smenu'] = $wdgvar['path']['uid'];
		$wdgvar['depth'] = $wdgvar['path']['depth'];
	}
	$wdgvar['sid'] = $wdgvar['sid'] ? substr($wdgvar['sid'],0,strlen($wdgvar['sid'])-1): '';
}
else {
	$wdgvar['smenu'] = 0;
	$wdgvar['depth'] = 0;
	$wdgvar['sid']	 = '';
}
$_treeOptions=array('site'=>$s,'table'=>$table['s_menu'],'dispNum'=>true,'dispHidden'=>true,'hideIcon'=>true,'userMenu'=>$wdgvar['link'],'allOpen'=>$wdgvar['menuopen'],'mobile'=>$wdgvar['mobile'],'ctype'=>'id');
echo getTreeMenu($_treeOptions,$c,$wdgvar['depth'],$wdgvar['smenu'],$wdgvar['sid']);
?>
