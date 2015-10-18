<?php
include_once $g['path_module'].'mediaset/function.php';
$d['layout']['_slide'] = getArrayString($d['layout']['front_people']);
?>

<div class="container marketing">
	<div class="row">
		<?php $_i=0;foreach($d['layout']['_slide']['data'] as $_tmp['uid']):?>
		<?php $_tmp['m']=getUidData($table['s_upload'],$_tmp['uid'])?>
		<div class="col-sm-4">
			<img class="img-circle rb-main-img-circle" src="<?php echo getMediaLink($_tmp['m'],0)?>" alt="<?php echo $_tmp['m']['alt']?>">
			<h2><?php echo $_tmp['m']['alt']?$_tmp['m']['alt']:'Alt 등록요함'?></h2>
			<p><?php echo $_tmp['m']['description']?$_tmp['m']['description']:'미디어셋에서 삽입한 사진의 등록정보에 Description 등록하면 이 곳에 출력됩니다.'?></p>
			<?php if($_tmp['m']['linkurl']):?>
			<p><a class="btn btn-default" href="<?php echo $_tmp['m']['linkurl']?>"<?php if($_tmp['m']['linkto']=='3'):?> target="_blank"<?php endif?> role="button">자세히보기 &raquo;</a></p>
			<?php else:?>
			<p><a class="btn btn-default" href="#." disabled role="button">자세히보기 &raquo;</a></p>
			<?php endif?>
		</div>
		<?php $_i++;endforeach?>
	</div>
</div>

<div class="page-header">
	<h1>레이아웃 내장 메인페이지</h1>
</div>

<p>이 페이지는 레이아웃에 포함되어 있는 메인화면입니다</p>

<dl>
	<dt>이 파일의 위치</dt>
	<dd><code><?php echo __FILE__?></code></dd>
</dl>
<hr>
<p>
	<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;layoutPage=sample" class="btn btn-default">
		레이아웃 내장 페이지 샘플보기
	</a>
</p>
