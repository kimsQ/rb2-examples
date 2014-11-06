<footer class="rb-footer" role="contentinfo">
    <div class="container">
        <ul class="list-inline">
            <li><a href="<?php echo RW('mod=privacy')?>"><?php echo _LANG('s4001','xlayout')?></a></li>
            <li><a href="<?php echo RW('mod=terms')?>"><?php echo _LANG('s4002','xlayout')?></a></li>
            <li class="pull-right"><a href="#"><?php echo _LANG('s4003','xlayout')?></a></li>
			<?php if($_HS['m_layout']&&$g['mobile']):?><li class="pull-right"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=mobilemode"><?php echo _LANG('s4004','xlayout')?></a></li><?php endif?>
        </ul>
        <p>© <?php echo $date['year']?> <?php echo $_SERVER['HTTP_HOST']?></p>
    </div>
</footer>
