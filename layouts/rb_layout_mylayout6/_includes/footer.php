<footer class="rb-footer" role="contentinfo">
    <div class="container">
        <ul class="list-inline">
            <li><a href="<?php echo RW('mod=privacy')?>">개인정보취급방침</a></li>
            <li><a href="<?php echo RW('mod=terms')?>">이용약관</a></li>
            <li class="pull-right"><a href="#">위로</a></li>
			<?php if($_HS['m_layout']&&$g['mobile']):?><li class="pull-right"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=mobilemode">모바일버젼</a></li><?php endif?>
        </ul>
        <p>© <?php echo $date['year']?> <?php echo $_SERVER['HTTP_HOST']?></p>
    </div>
</footer>
