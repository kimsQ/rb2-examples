<?php
if (!function_exists('getMenuWidgetTree'))
{
	function getMenuWidgetTree($site,$table,$is_child,$parent,$depth,$id,$w,$_C)
	{
		global $_CA;

		if ($depth < $w['limit'])
		{
			$CD=getDbSelect($table,($site?'site='.$site.' and ':'').'hidden=0 and parent='.$parent.' and depth='.($depth+1).($w['mobile']?' and mobile=1':'').' order by gid asc','*');
			echo "\n";
			for ($i=0;$i<$depth;$i++) echo "\t";
			if($is_child)
			{
				echo "<ul".($w['dropdown']?' class="dropdown-menu" role="menu" aria-labelledby="dLabel"':'').">\n";
				if ($w['dropdown'] && $w['dispfmenu'])
				{
					echo $_C['link'];
					echo '<li role="presentation" class="divider"></li>'."\n";
				}
			}
			while($C=db_fetch_array($CD))
			{
				$_newTree	= ($id?$id.'/':'').$C['id'];
				$_href		= $w['link']=='bookmark'?' data-scroll href="#'.($C['is_child']&&$w['limit']>1&&!$parent&&$w['dropdown']?'':str_replace('/','-',$_newTree)).'"' : ' href="'.RW('c='.$_newTree).'"';
				$_dropdown	= $w['dropdown']&&$C['is_child']&&$C['depth']==($w['depth']+1)&&$w['olimit']>1?' class="dropdown-toggle" data-toggle="dropdown"':'';
				$_name		= $C['name'].($_dropdown?' <i class="caret"></i>':'');
				$_target	= $C['target']=='_blank'?' target="_blank"':'';
				$_addattr	= $C['addattr']?' '.$C['addattr']:'';

				for ($i=0;$i<$C['depth'];$i++) echo "\t";
				
				if ($_dropdown) echo '<li class="dropdown'.(in_array($C['id'],$_CA)?' active':'').'"><a'.$_addattr.$_href.$_dropdown.$_target.'>'.$_name.'</a>';
				else echo '<li'.(in_array($C['id'],$_CA)?' class="active"':'').'><a'.$_addattr.$_href.$_dropdown.$_target.'>'.$_name.'</a>';

				if ($C['is_child'])
				{
					$C['link'] = '<li><a'.$_addattr.$_href.$_target.'>'.$C['name'].'</a></li>';
					getMenuWidgetTree($site,$table,$C['is_child'],$C['uid'],$C['depth'],$_newTree,$w,$C);
				}
				echo "</li>\n";
			}
			for ($i=0;$i<$depth;$i++) echo "\t";
			if($is_child) echo "</ul>\n";
			for ($i=0;$i<$depth;$i++) echo "\t";
		}
	}
}
$wddvar['limit'] = $wddvar['limit'] < 6 ? $wddvar['limit'] : 5;
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
getMenuWidgetTree($s,$table['s_menu'],0,$wdgvar['smenu'],$wdgvar['depth'],$wdgvar['sid'],$wdgvar,array());
?>
