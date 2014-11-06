<!DOCTYPE html>
<html lang="ko">
<head>
<?php include $g['dir_layout'].'/_includes/_import.head.php'?>
</head>
<body id="rb-body" class="rb-layout-home">

	<?php include $g['dir_layout'].'/_includes/header.php'?>

	<div class="jumbotron">
		<div class="container">
			<h2><?php echo $_FHM['name']?></h2>
			<p>
				<?php echo $_FHM['addinfo']?$_FHM['addinfo']:'관리자모드 - 사이트 - 메뉴 - ['.$_FHM['name'].'] 등록정보 - 고급설정 - 코드확장 - 부가필드에 출력할 내용을 입력해 주세요.'?>
			</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3" role="main" id="content-main">
				<ol class="breadcrumb hidden-xs">
					<?php echo $g['location']?>
				</ol>
				<?php include __KIMS_CONTENT__ ?>
			</div>
			<div class="col-md-3 col-md-pull-9" role="navigation" id="content-sub">
				<div class="rb-sidebar hidden-print">
					<nav class="panel panel-default rb-menu">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $_FHM['name']?></h3>
						</div>
						<?php if($_FHM['isson']) getWidget('default/mk-menu-collapse',array('smenu'=>'-1','limit'=>'2','collid'=>'rb-sidemenu-collapse','dispfmenu'=>'1','collapse'=>($d['layout']['sub_colla']?1:0)))?>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<?php include $g['dir_layout'].'/_includes/footer.php'?>
	<?php include $g['dir_layout'].'/_includes/_import.foot.php'?>
	
</body>
</html>

