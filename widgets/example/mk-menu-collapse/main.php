<?php
if (!function_exists('getMenuWidgetCollapse'))
{
	function getMenuWidgetCollapse($site,$table,$is_child,$parent,$depth,$id,$w,$_C)
	{
		global $_CA;
		$CD = getDbSelect($table,($site?'site='.$site.' and ':'').'hidden=0 and parent='.$parent.' and depth='.($depth+1).($w['mobile']?' and mobile=1':'').' order by gid asc','*');
		if(db_num_rows($CD))
		{
?>
<div class="list-group" id="<?php echo $w['collid']?>">
	<?php 
	while($C = db_fetch_array($CD)):
	$CD1 = getDbSelect($table,($site?'site='.$site.' and ':'').'hidden=0 and parent='.$C['uid'].' and depth='.($C['depth']+1).' order by gid asc','*');
	$_newTree	= ($id?$id.'/':'').$C['id'];
	$_newTreeB	= str_replace('/','-',$_newTree);
	$_href		= $w['link']=='bookmark'?'#'.$_newTreeB:RW('c='.$_newTree);
	$_name		= $C['name'];
	$_target	= $C['target']=='_blank'?' target="_blank"':'';
	$_addattr	= $C['addattr']?' '.$C['addattr']:'';
	$_isActive	= in_array($C['id'],$_CA);
	?>
	<?php if($C['is_child'] && $w['limit'] > 1 && $w['collapse']):?>
	<div class="panel rb-panel">
		<a data-toggle="collapse" data-parent="#<?php echo $w['collid']?>" href="#<?php echo $w['collid']?>-<?php echo $C['uid']?>" class="list-group-item<?php if($_isActive):?> active<?php endif?>">
			<?php echo $C['name']?>
			<span class="branch"></span>
		</a>
		<div id="<?php echo $w['collid']?>-<?php echo $C['uid']?>" class="collapse<?php if($_isActive):?> in<?php endif?>">
			<ul class="nav">
				<?php if($w['dispfmenu']):?>
				<li class="rb-fmenu"><a href="<?php echo $_href?>"<?php echo $_addattr.$_target?>><?php echo $_name?></a></li>
				<li role="presentation" class="divider"></li>
				<?php endif?>
				<?php while($C1 = db_fetch_array($CD1)):?>
				<li<?php if(in_array($C1['id'],$_CA)):?> class="active"<?php endif?>><a href="<?php echo $w['link']=='bookmark'?'#'.$_newTreeB.'-'.$C1['id']:RW('c='.$_newTree.'/'.$C1['id'])?>"<?php if($C1['addattr']):?> <?php echo $C1['addattr']?><?php endif?><?php if($C1['target']):?> target="<?php echo $C1['target']?>"<?php endif?>><?php echo $C1['name']?></a></li>
				<?php endwhile?>
			</ul>
		</div>
	</div>
	<?php else:?>
	<a href="<?php echo $_href?>"<?php echo $_addattr.$_target?> class="list-group-item<?php if($_isActive):?> active<?php endif?>">
		<?php echo $C['name']?>
		<?php if($C['is_child']):?><span class="branch"></span><?php endif?>
	</a>
	<?php if($C['is_child'] && $w['limit'] > 1 && $_isActive):?>
	<ul class="nav">
		<?php while($C1 = db_fetch_array($CD1)):?>
		<li<?php if(in_array($C1['id'],$_CA)):?> class="active"<?php endif?>><a href="<?php echo $w['link']=='bookmark'?'#'.$_newTreeB.'-'.$C1['id']:RW('c='.$_newTree.'/'.$C1['id'])?>"<?php if($C1['addattr']):?> <?php echo $C1['addattr']?><?php endif?><?php if($C1['target']):?> target="<?php echo $C1['target']?>"<?php endif?>><?php echo $C1['name']?></a></li>
		<?php endwhile?>
	</ul>
	<?php endif?>
	<?php endif?>
	<?php endwhile?>
</div>
<?php
		}
	}
}
$wddvar['limit'] = $wddvar['limit'] < 3 ? $wddvar['limit'] : 2;
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
		$wdgvar['sid'] = $c;
		$wdgvar['smenu'] = $_HM['uid'];
		$wdgvar['depth'] = $_HM['depth'];
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
	$wdgvar['depth'] = 0;
}
$wdgvar['olimit']= $wdgvar['limit'];
$wdgvar['limit'] = $wdgvar['limit'] + $wdgvar['depth'];
getMenuWidgetCollapse($s,$table['s_menu'],0,$wdgvar['smenu'],$wdgvar['depth'],$wdgvar['sid'],$wdgvar,array());
?>
