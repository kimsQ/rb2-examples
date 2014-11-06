<div id="mjointbox">
	<h5>
		<i class="fa fa-info-circle"></i>
		이 위젯(<strong><?php echo getFolderName($g['path_widget'].$swidget)?></strong>)을 추가하시겠습니까?
	</h5>

	<form name="procform" class="form-horizontal rb-form" role="form">
		<div class="form-group">
			<label class="col-sm-3 control-label">콤보박스</label>
			<div class="col-sm-8">
				<select name="bbsid" class="form-control">
				<option value="">&nbsp;+ 선택하기</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">타이틀</label>
			<div class="col-sm-8">
				<input type="text" name="title" value="<?php echo $wdgvar['title']?$wdgvar['title']:'갤러리'?>" class="form-control" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">링크연결</label>
			<div class="col-sm-8">
				<input type="text" name="link" value="<?php echo $wdgvar['link']?>" class="form-control" placeholder="">
				<span class="help-block">
					<small>
						링크입력시 more(더보기) 링크가 출력됩니다.<br>
					</small>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">노출갯수</label>
			<div class="col-sm-8">
				<select name="limit" class="form-control">
				<?php for($i = 1; $i < 21; $i++):?>
				<option value="<?php echo $i?>"<?php if($wdgvar['limit']==$i || (!$wdgvar['limit']&&$i==6)):?> selected<?php endif?>><?php echo $i?>개</option>
				<?php endfor?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">사진사이즈</label>
			<div class="col-sm-8">
				<div class="input-group input-group-sm">
					<input type="number" class="form-control" name="width" value="<?php echo $wdgvar['width']?$wdgvar['width']:120?>" placeholder="">
					<span class="input-group-addon">x</span>
					<input type="number" class="form-control" name="height" value="<?php echo $wdgvar['height']?$wdgvar['height']:90?>" placeholder="">
					<span class="input-group-addon">px</span>
				</div>
			</div>
		</div>
	</form>
</div>

<style>
#mjointbox {padding-bottom:50px;}
#mjointbox h5 {border-bottom:#dfdfdf dashed 1px;padding:12px 0 15px 0;margin:0 0 30px 0;}
</style>


<script>
//위젯코드 리턴
function widgetCode(n)
{
	var f = document.procform;
	var widgetName = "<?php echo $swidget?>"; // 위젯명칭
	var widgetInfo = "";

	if(f.bbsid.value) widgetInfo = "'bid'=>'"+f.bbsid.value+"',";
	if(f.limit.value) widgetInfo+= "'limit'=>'"+f.limit.value+"',";
	if(f.width.value) widgetInfo+= "'width'=>'"+f.width.value+"',";
	if(f.height.value) widgetInfo+= "'height'=>'"+f.height.value+"',";
	if(f.title.value) widgetInfo+= "'title'=>'"+f.title.value+"',";
	if(f.link.value) widgetInfo+= "'link'=>'"+f.link.value+"',";
	
	if (n) return "<img alt=\"getWidget('"+widgetName+"',array("+widgetInfo+"))\" class=\"rb-widget-edit-img\" src=\"./_core/images/blank.gif\" />"; // 에디터삽입 위젯 이미지 코드
	else return "<"+"?php "+"getWidget('"+widgetName+"',array("+widgetInfo+"))?>"; // PHP 위젯함수 코드
}
//위젯 삽입하기
function saveCheck(n)
{
	if (n) parent.InserHTMLtoEditor(widgetCode(n));
	else {
		var f = document.procform;
		<?php if(!$option):?>
		var i;
		var n = 0;
		for (i = 0; i < parent.maxTiles; i++)
		if (parent.moveObject[i].style.display=='block') n = i+1;
		<?php else:?>
		var n = <?php echo $dropfield?>;
		<?php endif?>

		<?php if(!$option):?>
		parent.createTile('440px','350px','0px','0px'); // 위젯블럭 사이즈 및 위치(너비,높이,top,left)
		<?php endif?>
		parent.blocktitle[n] = '테스트위젯'; // 위젯블럭 타이틀
		parent.blockarray[n] = "<?php echo $swidget?>,bid^" + f.bbsid.value + ",limit^"+f.limit.value+",width^"+f.width.value+",height^"+f.height.value+",link^"+f.link.value+",title^"+f.title.value; // 위젯변수 셋팅
		parent.getId('wtitle'+n).innerHTML = parent.blocktitle[n];
	}
}
</script>
