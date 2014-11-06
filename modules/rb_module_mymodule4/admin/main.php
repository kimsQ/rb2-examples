<div id="rb-mymodule">
	<form action="<?php echo $g['s']?>/" method="post" name="FormName" onsubmit="return FormCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>">
	<input type="hidden" name="m" value="<?php echo $module?>">
	<input type="hidden" name="a" value="action">
	<button type="submit" class="btn btn-primary">액션요청</button>
	</form>
</div>


<script>
function FormCheck(f)
{
	if (confirm('정말로 실행하시겠습니까?'))
	{
		getIframeForAction(f);
		return true;
	}
	return false;
}
</script>
