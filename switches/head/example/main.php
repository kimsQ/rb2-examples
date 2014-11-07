<!-- Lazy Load XT :  http://ressio.github.io/lazy-load-xt --> 
<?php getImport('lazy-load-xt','jquery.lazyloadxt.min',false,'js') ?> 
<?php getImport('lazy-load-xt','jquery.lazyloadxt.video.min',false,'js') ?> 

<style>
/* fade효과 */
.lazy-loaded {
    -webkit-transition: opacity 0.3s;
    -moz-transition: opacity 0.3s;
    -ms-transition: opacity 0.3s;
    -o-transition: opacity 0.3s;
    transition: opacity 0.3s;
    opacity: 1;
}
/* 로딩이미지 이펙트  */
.lazy-hidden  {
    min-height: 30px;
    min-width: 100%;
    background: #f4f4f4 url('<?php echo $g['img_core']?>/loading/loading-spokes.svg') no-repeat 50% 50%;
    color: #999;
}
</style>