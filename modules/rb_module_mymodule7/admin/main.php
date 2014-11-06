<div id="rb-mymodule">
	<form action="<?php echo $g['s']?>/" method="post" name="FormName" onsubmit="return FormCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>">
	<input type="hidden" name="m" value="<?php echo $module?>">
	<input type="hidden" name="a" value="action">
	<button type="submit" class="btn btn-default"><?php echo _LANG('a1001','mymodule7')?><!--액션요청--></button>
	<a class="btn btn-primary" href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=module&amp;front=main&amp;id=<?php echo $module?>"><?php echo _LANG('a1002','mymodule7')?><!--DB TABLE 생성정보 보기--></a>
	</form>
</div>


<script>
function FormCheck(f)
{
	if (confirm('<?php echo _LANG('a1003','mymodule7')?>'))
	{
		getIframeForAction(f);
		return true;
	}
	return false;
}
</script>

