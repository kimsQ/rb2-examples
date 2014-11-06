<!-- 엔진코드:삭제하지마세요 -->
<?php include $g['path_core'].'engine/foot.engine.php'?>

<script>
var bootmsg = '<div class="media"><i class="pull-left fa fa-exclamation-circle fa-4x hidden-xs"></i><div class="media-body">';
	bootmsg+= '<h4 class="media-heading">로그인 정보를 저장하시겠습니까?</h4>';
	bootmsg+= '로그인 정보를 저장할 경우 다음접속시 정보를 입력하지 않으셔도 됩니다.<br>';
	bootmsg+= '그러나, 개인PC가 아닐 경우 타인이 로그인할 수 있습니다.<br>';
	bootmsg+= 'PC를 여러사람이 사용하는 공공장소에서는 체크하지 마세요.<br>';
	bootmsg+= '</div></div>';

$('.rb-confirm').on('click', function() {
	bootbox.confirm(bootmsg, function(result){
		document.LayoutLogForm.idpwsave.checked = result;
	});
	$('.bootbox .media-heading').css({'font-weight':'bold','margin-bottom':'8px'});
	$('.bootbox .modal-footer').css({'margin-top':'0','background-color':'#f2f2f2'});
	$('.bootbox .modal-footer .btn-default').addClass('pull-left');
});
</script>

<?php if($d['layout']['header_fixed']=='true'):?>
<style>
body {padding-top:70px}
</style>
<?php endif?>

