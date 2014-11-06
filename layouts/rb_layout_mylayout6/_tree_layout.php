<!DOCTYPE html>
<html lang="ko">
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
						<?php echo $_FHM['addinfo']?$_FHM['addinfo']:'관리자모드 - 사이트 - 메뉴 - ['.$_FHM['name'].'] 등록정보 - 고급설정 - 코드확장 - 부가필드에 출력할 내용을 입력해 주세요.'?>
					</div>

					<!-- 트리형 메뉴 -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">카테고리 <small>Categories</small></h4>
						</div>
						<div class="panel-body">
							<div class="rb-tree">
								<?php if($_FHM['isson']) getWidget('default/mk-menu-tree',array('smenu'=>'-1','link'=>'link','menuopen'=>($d['layout']['sub_tree']?1:0)))?>
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
