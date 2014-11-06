<!-- bootstrap-lightbox  --> 
<?php getImport('lightbox','ekko-lightbox',false,'css')?> 
<?php getImport('lightbox','ekko-lightbox.min',false,'js')?> 

<!-- theme --> 
<?php getImport('lightbox','themes/dark',false,'css')?> 

<script>
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 
</script>
