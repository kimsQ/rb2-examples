
<div class="panel-body">
	<dl class="dl-horizontal">
		<dt>Web Server</dt>
		<dd><?php echo $_SERVER['SERVER_SOFTWARE']?></dd>
		<dt>PHP Version</dt>
		<dd><?php echo phpversion()?></dd>
		<dt>MySQL Version</dt>
		<dd><?php echo db_info()?> (<?php echo $DB['type']?>)</dd>
		<dt>GD Version</dt>
		<dd><?php $_gd = gd_info();echo $_gd['GD Version']?></dd>
		<dt>KimsQ Rb Version</dt>
		<dd><?php echo $d['admin']['version']?></dd>
	</dl>
</div>
