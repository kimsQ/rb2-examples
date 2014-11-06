<!DOCTYPE html>
<html lang="<?php echo $lang['xlayout']['lang']?>">
<head>
<?php include $g['dir_layout'].'/_includes/_import.head.php'?>
</head>
<body id="rb-body" class="rb-layout-home">

	<?php include $g['dir_layout'].'/_includes/header.php'?>

	<div class="container">
		<div class="row">
			<div id="content-main" class="col-md-9" role="main">
				<ol class="breadcrumb hidden-xs">
					<?php echo $g['location']?>
				</ol>
				<?php include __KIMS_CONTENT__ ?>
			</div>
			<div class="col-md-3" role="navigation" id="content-sub">
				<div class="rb-sidebar hidden-print">
					<div class="well">
						<?php echo $_FHM['addinfo']?$_FHM['addinfo']:sprintf(_LANG('s1001','xlayout'),$_FHM['name'])?>
					</div>

					<!-- 트리형 메뉴 -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><?php echo _LANG('s2001','xlayout')?></h4>
						</div>
						<div class="panel-body">
							<div class="rb-tree">
								<?php if($_FHM['is_child']) getWidget('default/mk-menu-tree',array('smenu'=>'-1','link'=>'link','menuopen'=>($d['layout']['sub_tree']?1:0)))?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<?php include $g['dir_layout'].'/_includes/footer.php'?>
	<?php include $g['dir_layout'].'/_includes/_import.foot.php'?>
	
</body>
</html>
