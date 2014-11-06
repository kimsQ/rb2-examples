<?php
include_once $g['path_module'].'mediaset/function.php';
$d['layout']['_slide'] = getArrayString($d['layout']['front_people']);
?>

<div class="container marketing">
	<div class="row">
		<?php $_i=0;foreach($d['layout']['_slide']['data'] as $_tmp['uid']):?>
		<?php $_tmp['m']=getUidData($table['s_upload'],$_tmp['uid'])?>
		<div class="col-lg-4">
			<img class="img-circle rb-main-img-circle" src="<?php echo getMediaLink($_tmp['m'],0)?>" alt="<?php echo $_tmp['m']['alt']?>">
			<h2><?php echo $_tmp['m']['alt']?$_tmp['m']['alt']:_LANG('s5001','xlayout')?></h2>
			<p><?php echo $_tmp['m']['description']?$_tmp['m']['description']:_LANG('s5002','xlayout')?></p>
			<?php if($_tmp['m']['linkurl']):?>
			<p><a class="btn btn-default" href="<?php echo $_tmp['m']['linkurl']?>"<?php if($_tmp['m']['linkto']=='3'):?> target="_blank"<?php endif?> role="button"><?php echo _LANG('s5003','xlayout')?> &raquo;</a></p>
			<?php else:?>
			<p><a class="btn btn-default" href="#." disabled role="button"><?php echo _LANG('s5003','xlayout')?> &raquo;</a></p>
			<?php endif?>
		</div>
		<?php $_i++;endforeach?>
	</div>
</div>

