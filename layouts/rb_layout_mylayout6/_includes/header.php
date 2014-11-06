<!-- navbar -->
<header class="navbar navbar-<?php echo $d['layout']['header_trans']=='true'?'inverse':'default'?> header-navigation<?php if($d['layout']['header_fixed']=='true'):?> navbar-fixed-top<?php else:?> navbar-static-top<?php endif?>" role="navigation" id="rb-page-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo RW(0)?>"><?php echo $d['layout']['header_title']?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php getWidget('default/mk-menu-default',array('smenu'=>'0','limit'=>'2','dropdown'=>'1','dispfmenu'=>'1'))?>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<?php if($d['layout']['header_search']=='true'):?>
				<!-- 검색 -->
				 <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="검색"><i class="fa fa-search fa-lg"></i></a>
					<div class="dropdown-menu rb-toggle-layer">
						<div class="panel panel-default">
							<div class="panel-body">
								<form action="<?php echo $g['s']?>/" class="navbar-form" role="search">
								<input type="hidden" name="r" value="<?php echo $r?>">
								<input type="hidden" name="m" value="search">
									<div class="input-group">
										<input class="form-control" name="keyword" value="<?php echo $_keyword?>" placeholder="Search" type="text">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit">
												<i class="glyphicon glyphicon-search"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
							<div class="panel-footer"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=search">자세히</a></div>
						</div>
					</div>
				</li>
				<!-- //검색 -->
				<?php endif?>
				
				<?php if($d['layout']['header_login']!='hidden'):?>
				<?php if(!$my['uid']):?>
				<li class="dropdown">
					<?php if($d['layout']['header_login']=='modal'):?>
					<a href="#" class="rb-modal-login" data-toggle="modal" data-target="#modal_window">
						로그인
					</a>
					<?php else:?>
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						로그인 <i class="caret"></i>
					</a>
					<div class="dropdown-menu rb-login-layer">
						<form name="LayoutLogForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return layoutLogCheck(this);" role="form">
						<input type="hidden" name="r" value="<?php echo $r?>">
						<input type="hidden" name="a" value="login">
						<input type="hidden" name="referer" value="<?php echo $referer ? $referer : $_SERVER['HTTP_REFERER']?>">
							<div class="form-group">
								<label class="sr-only" for="username">아이디 또는 이메일</label>
								<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" id="username" name="id" class="form-control" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',0)?>" placeholder="아이디 또는 이메일">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="password">패스워드</label>
								<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" id="password" name="pw" class="form-control" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',1)?>" placeholder="패스워드">
								</div>
							</div>
							<div class="checkbox">
								<label><input class="rb-confirm" type="checkbox" name="idpwsave" value="checked" <?php if($_COOKIE['svshop']):?> checked<?php endif?>>아이디/비번 기억하기</label>
							</div>
							<button type="submit" class="btn btn-primary btn-block">로그인</button>
						</form>
					</div>
					<?php endif?>
				</li>
				<?php else:?>
				<?php if($d['layout']['header_notify']=='true'):?>
				<!-- 알림 -->
				<li class="dropdown">
					<a href="#." class="dropdown-toggle rb-notifications-toggle" data-toggle="dropdown">
						<i class="fa fa-bell"></i> 
						<span id="rb-notification-badge" class="badge"><?php echo $my['num_notice']?></span> 
						<i class="caret"></i>
					</a>
					<div class="dropdown-menu rb-toggle-layer">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<h3 class="pull-left panel-title">알림</h3>
								<div class="pull-right"><a href="#." class="rb-notifications-modal-config" role="button" data-toggle="modal" data-target="#modal_window">설정</a></div>
							</div>
							<div id="rb-notifications-layer" class="list-group rb-notifications-layer"></div>
							<div class="panel-footer"><a href="#." class="rb-notifications-modal-view" role="button" data-toggle="modal" data-target="#modal_window">모두 보기</a></div>
						</div> 
					</div>
				</li>
				<!-- //알림 -->
				<?php endif?>
				<!-- 개인정보 -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $my[$_HS['nametype']]?> <b class="caret"></b></a>
					<ul class="dropdown-menu">    
						<li class="dropdown-header"> 프로필</li>
						<li><a href="#."><img class="img-circle" width="25" height="25" src="<?php echo $g['s']?>/_var/avatar/<?php echo $my['photo']?$my['photo']:'0.gif'?>"> <?php echo $my[$_HS['nametype']]?></a></li>
						<li class="divider"></li>
						<li role="presentation" class="dropdown-header">설정</li>
						<li><a href="#."><i class="glyphicon glyphicon-lock"></i> 프로필관리</a></li>
						<li><a href="#."><i class="glyphicon glyphicon-user"></i> 접속기록</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><i class="glyphicon glyphicon-log-out"></i> 로그아웃</a></li>
					</ul>
				</li>
				<!-- /개인정보 -->
				<?php endif?>
				<?php endif?>
			</ul>
		</div>
	</div>
</header>

