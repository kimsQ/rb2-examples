<div id="mjointbox">
	<h5>
		<i class="fa fa-info-circle"></i>
		<?php echo sprintf(_LANG('1001','widget-mk-menu-default'),getFolderName($g['path_widget'].$swidget))?>
	</h5>

	<form name="procform" class="form-horizontal rb-form" role="form">
		<div class="form-group">
			<label class="col-sm-3 control-label"><?php echo _LANG('1002','widget-mk-menu-default')?></label>
			<div class="col-sm-8">
				<select name="smenu" class="form-control">
				<option value="0">ㆍ<?php echo _LANG('1003','widget-mk-menu-default')?></option>
				<option value="-1">ㆍ<?php echo _LANG('1004','widget-mk-menu-default')?></option>
				<option value="-2">ㆍ<?php echo _LANG('1005','widget-mk-menu-default')?></option>
				<option value="-3">ㆍ<?php echo _LANG('1006','widget-mk-menu-default')?></option>
				<option value="0">----------------------------------------------------------------</option>
				<?php $_isUid='u'?>
				<?php $cat=$wdgvar['smenu']?>
				<?php include $g['path_core'].'function/menu1.func.php'?>
				<?php getMenuShowSelect($s,$table['s_menu'],0,0,0,0,0,'')?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label"><?php echo _LANG('1007','widget-mk-menu-default')?></label>
			<div class="col-sm-8">
				<select name="limit" class="form-control">
				<?php for($i = 1; $i < 6; $i++):?>
				<option value="<?php echo $i?>"<?php if($wdgvar['limit']==$i || (!$wdgvar['limit']&&$i==2)):?> selected="selected"<?php endif?>>ㆍ<?php echo sprintf(_LANG('1008','widget-mk-menu-default'),$i)?></option>
				<?php endfor?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label"><?php echo _LANG('1009','widget-mk-menu-default')?></label>
			<div class="col-sm-8">
				<select name="link" class="form-control">
				<option value="link">ㆍ<?php echo _LANG('1010','widget-mk-menu-default')?></option>
				<option value="bookmark">ㆍ<?php echo _LANG('1011','widget-mk-menu-default')?></option>
				</select>
				<span class="help-block">
					<small>
						<?php echo _LANG('1012','widget-mk-menu-default')?><br>
						<code>&lt;a data-scroll href=&quot;#MENUCODE&quot;&gt;</code>
					</small>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label"><?php echo _LANG('1013','widget-mk-menu-default')?></label>
			<div class="col-sm-8">
				<label class="rb-label"><input type="checkbox" name="dropdown" value="1"<?php if($wdgvar['dropdown']):?> checked<?php endif?>> <?php echo _LANG('1014','widget-mk-menu-default')?></label>
				<label class="rb-label"><input type="checkbox" name="dispfmenu" value="1"<?php if($wdgvar['dispfmenu']):?> checked<?php endif?>> <?php echo _LANG('1015','widget-mk-menu-default')?></label>
				<span class="help-block">
					<small>
						<?php echo _LANG('1016','widget-mk-menu-default')?>
					</small>
				</span>
				<span class="help-block">
					<small>
						<?php echo _LANG('1017','widget-mk-menu-default')?><br>
						<?php echo _LANG('1018','widget-mk-menu-default')?><br>
						<?php echo _LANG('1019','widget-mk-menu-default')?><br>
					</small>
				</span>
			</div>
		</div>
	</form>
</div>

<style>
#mjointbox {padding-bottom:50px;}
#mjointbox h5 {border-bottom:#dfdfdf dashed 1px;padding:12px 0 15px 0;margin:0 0 30px 0;}
#mjointbox .rb-label {font-weight:normal;cursor:pointer;}
</style>


<script>
//위젯코드 리턴
function widgetCode(n)
{
	var f = document.procform;
	var widgetName = "<?php echo $swidget?>"; // 위젯명칭
	var widgetInfo = "";

	if(f.smenu.value) widgetInfo+= "'smenu'=>'"+f.smenu.value+"',";
	if(f.limit.value) widgetInfo+= "'limit'=>'"+f.limit.value+"',";
	if(f.link.value) widgetInfo+= "'link'=>'"+f.link.value+"',";
	if(f.dropdown.checked) widgetInfo+= "'dropdown'=>'1',";
	if(f.dispfmenu.checked) widgetInfo+= "'dispfmenu'=>'1',";
	
	if (n) return "<img alt=\"getWidget('"+widgetName+"',array("+widgetInfo+"))\" class=\"rb-widget-edit-img\" src=\"./_core/images/blank.gif\">"; // 에디터삽입 위젯 이미지 코드
	else return "<"+"?php "+"getWidget('"+widgetName+"',array("+widgetInfo+"))?>"; // PHP 위젯함수 코드
}
//위젯 삽입하기
function saveCheck(n)
{
	<?php $isCodeOnly='Y'?>// 코드추출만 지원할 경우
}
</script>
