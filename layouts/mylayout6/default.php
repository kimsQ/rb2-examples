<!DOCTYPE html>
<html lang="ko">
	<head>
		<?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
	</head>
	<body class="rb-layout-default">

		<?php include $g['dir_layout'].'/_includes/header.php' ?>

		<div class="jumbotron">
			<div class="container">
				<h2><?php echo $_FHM['name']?></h2>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-push-3 rb-content-main" role="main">
					<ol class="breadcrumb hidden-xs">
						<?php echo $g['location']?>
					</ol>
					<?php include __KIMS_CONTENT__ ?>
				</div>
				<div class="col-md-3 col-md-pull-9 rb-content-sub" role="navigation">
					<div class="rb-sidebar hidden-print">
						<nav class="panel panel-default rb-menu">
							<div class="panel-heading">
								<h3 class="panel-title"><?php echo $_FHM['name']?></h3>
							</div>
							<ul class="list-group">
								<li class="list-group-item"><a href="#">메뉴1</a></li>
								<li class="list-group-item"><a href="#">메뉴2</a></li>
								<li class="list-group-item"><a href="#">메뉴3</a></li>
								<li class="list-group-item"><a href="#">메뉴4</a></li>
								<li class="list-group-item"><a href="#">메뉴5</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<?php include $g['dir_layout'].'/_includes/footer.php' ?>
		<?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
	</body>
</html>
