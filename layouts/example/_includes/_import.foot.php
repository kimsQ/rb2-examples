<!-- 엔진코드:삭제하지마세요 -->
<?php include $g['path_core'].'engine/foot.engine.php'?>

<script>
var bootmsg = '<div class="media"><i class="pull-left fa fa-exclamation-circle fa-4x hidden-xs"></i><div class="media-body">';
	bootmsg+= '<h4 class="media-heading"><?php echo _LANG('s6001','xlayout')?></h4>';
	bootmsg+= '<?php echo _LANG('s6002','xlayout')?>';
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

