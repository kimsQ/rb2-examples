<?php
include_once $g['path_module'].'mediaset/function.php';
$d['layout']['_slide'] = getArrayString($d['layout']['front_slide']);
?>

<?php if($d['layout']['_slide']['count']):?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php for($_i=0;$_i<$d['layout']['_slide']['count'];$_i++):?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $_i?>"<?php if(!$_i):?> class="active"<?php endif?>></li>
		<?php endfor?>
	</ol>

	<div class="carousel-inner" role="listbox">
		<?php $_i=0;foreach($d['layout']['_slide']['data'] as $_tmp['uid']):?>
		<?php $_tmp['m']=getUidData($table['s_upload'],$_tmp['uid'])?>
		<div class="item<?php if(!$_i):?> active<?php endif?>">
			<img src="<?php echo getMediaLink($_tmp['m'],1)?>" alt="First slide">
			<div class="container">
				<div class="carousel-caption">
					<h1><?php echo $_tmp['m']['caption']?></h1>
					<p><?php echo $_tmp['m']['description']?></p>
					<?php if($_tmp['m']['linkurl']):?>
					<p><a class="btn btn-lg btn-primary" href="<?php echo $_tmp['m']['linkurl']?>"<?php if($_tmp['m']['linkto']=='3'):?> target="_blank"<?php endif?> role="button">View details &raquo;</a></p>
					<?php endif?>
				</div>
			</div>
		</div>
		<?php $_i++;endforeach?>
	</div>

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>

</div>
<?php endif?>

