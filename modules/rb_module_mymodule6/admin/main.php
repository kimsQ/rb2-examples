<div id="rb-mymodule">
	<form action="<?php echo $g['s']?>/" method="post" name="FormName" onsubmit="return FormCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>">
	<input type="hidden" name="m" value="<?php echo $module?>">
	<input type="hidden" name="a" value="action">
	<button type="submit" class="btn btn-default">액션요청</button>
	<a class="btn btn-primary" href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=module&amp;front=main&amp;id=<?php echo $module?>">DB TABLE 생성정보 보기</a>
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
