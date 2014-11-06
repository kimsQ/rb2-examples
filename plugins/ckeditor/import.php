<?php
if(!defined('__KIMS__')) exit;
$__SRC__ = str_replace("&lt;?php getWidget(",'<img alt="getWidget(',$__SRC__);
$__SRC__ = str_replace("))?&gt;",'))" src="./_core/images/blank.gif" class="rb-widget-edit-img">',$__SRC__);
?>

<div class="form-group">
	<textarea name="source" class="form-control ckeditor" id="ckeditor_textarea"><?php echo $__SRC__?></textarea>
</div>

<?php getImport('ckeditor','full/ckeditor',false,'js')?>
<script>
function InserHTMLtoEditor(sHTML)
{
	CKEDITOR.instances['ckeditor_textarea'].insertHtml(sHTML);
}
CKEDITOR.replace('ckeditor_textarea', {
	height: 500,
	language : '<?php echo $lang['site']['a4027']?substr($lang['site']['a4027'],0,2):'en'?>'
});
</script>
