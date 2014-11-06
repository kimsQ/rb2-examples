<!DOCTYPE html>
<html lang="<?php echo $lang['xlayout']['lang']?>">
<head>
<?php include $g['dir_layout'].'/_includes/_import.head.php'?>
</head>
<body id="rb-body" class="rb-layout-home">

	<?php include $g['dir_layout'].'/_includes/header.php'?>
	<?php include $g['dir_layout'].'/_includes/carousel.php'?>

	<div id="content-main" class="container">
		<?php include __KIMS_CONTENT__ ?>
	</div>

	<?php include $g['dir_layout'].'/_includes/footer.php'?>
	<?php include $g['dir_layout'].'/_includes/_import.foot.php'?>
	
</body>
</html>
