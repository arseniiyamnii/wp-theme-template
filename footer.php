
<script>
jQuery(window).scroll(function() {
    if (jQuery(document).scrollTop() > 50) {
        jQuery('.nav').addClass('affix');
        console.log("OK");
    } else {
        jQuery('.nav').removeClass('affix');
    }
});

jQuery('.navTrigger').click(function () {
    jQuery(this).toggleClass('active');
    console.log("Clicked menu");
    jQuery("#mainListDiv").toggleClass("show_list");
    jQuery("#mainListDiv").fadeIn();

});

jQuery(function() {
    jQuery('.carousel.lazy-load').bind('slide.bs.carousel', function (e) {
        var image = jQuery(e.relatedTarget).find('img[data-src]');
        image.attr('src', image.data('src'));
        image.removeAttr('data-src');
    });
});
</script>
<?php wp_footer(); ?>
</body>
</html>
