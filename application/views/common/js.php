<script type="text/javascript">
	var base_url = '<?= base_url() ?>';
</script>
<script type="text/javascript" src="<?= base_url('assets') ?>/js/jquery-3.1.1.min.js"></script> 
<!-- JQUERY MIGRATE  --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/jquery-migrate-1.2.1.min.js"></script> 
<!-- BOOTSTRAP CORE JS --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script> 
<!-- JQUERY SELECT --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/select2.min.js"></script> 
<!-- MEGA MENU --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/bootstrap-dropdownhover.js"></script> 
<!-- JQUERY EASING --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/easing.js"></script> 
<!-- JQUERY COUNTERUP --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/counterup.js"></script> 
<!-- JQUERY WAYPOINT --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/waypoints.min.js"></script> 
<!-- JQUERY REVEAL --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/footer-reveal.min.js"></script> 
<!-- Owl Carousel --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/owl-carousel.js"></script> 
<!-- MOBILE MENU JS -->
<script type="text/javascript" src="<?= base_url('assets') ?>/js/jquery.meanmenu.js"></script>
<!--Style Switcher -->
<script src="<?= base_url('assets') ?>/js/color-switcher.js"></script>
<!-- CORE JS --> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/custom.js"></script> 
<!-- RANGE SLIDER JS -->  
<script type="text/javascript" src="<?= base_url('assets') ?>/js/nouislider.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets') ?>/js/wNumb.js"></script>
<script type="text/javascript" src="<?= base_url('assets') ?>/masterslider/js/masterslider.min.js"></script> 
<script type="text/javascript" src="<?= base_url('assets') ?>/js/user.js"></script>

<script type="text/javascript" src="<?= base_url('assets') ?>/js/slick.min.js"></script>

<script>
            $('.gallery-slideshow-not-tab').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                arrows: true,
                fade: true,
                asNavFor: '.gallery-nav-not-tab',
                adaptiveHeight: true,
            });
            $('.gallery-nav-not-tab').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                speed: 500,
                asNavFor: '.gallery-slideshow-not-tab',
                dots: false,
                centerMode: true,
                focusOnSelect: true,
                infinite: true,
                responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 5,
                    }
                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                }, {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                    }
                }]
            });
         </script>