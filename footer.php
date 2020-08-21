<footer class="footer">
        <div class="container">
            <div class="footer__left">
                <div class="footer__copy"><?php echo rdty_option('rdty_cptext'); ?></div>
            </div>
            <div class="footer__links">
                <ul class="navbar-nav">
                <?php if ( has_nav_menu( 'secondary' ) ){ wp_nav_menu(array ('theme_location'=> 'primary','container'=> FALSE,'container_id'=> FALSE,'menu_class'=> false,'menu_id'=> false,'items_wrap'      => '%3$s','add_li_class'  => 'nav-item','add_link_class'  => 'nav-link','depth'=> 0)); } else { } ?>
                </ul>
            </div>
            <div class="footer__right"><a href="https://globalctoforum.org/"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/gcf.svg" alt="Connects the world's leading CTOs and technology stakeholders."></a><a href=https://radity.com/><img src="<?php bloginfo('template_url'); ?>/assets/img/general/design-and-code-radity.png" srcset="<?php bloginfo('template_url'); ?>/assets/img/general/design-and-code-radity.png 1x, <?php bloginfo('template_url'); ?>/assets/img/general/design-and-code-radity@2x.png 2x" alt="Design & Code - Radity"></a>
            </div>
        </div>
    </footer>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/rad-animations.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/library/lozad.min.js"></script>
    <script>
        window.addEventListener("load", function() {
            var observer = window.lozad(".lozad", {
                rootMargin: window.innerHeight / 2 + "px 0px",
                threshold: 0.01
            });
            observer.observe();
        });
    </script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/library/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/library/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/sticky-header.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/library/smooth-scroll.polyfills.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/library/fontfaceobserver.js"></script>
    <script>
        (function(w) {
            if (w.document.documentElement.className.indexOf("fonts-loaded") > -1) {
                return;
            }
            var fontA = new w.FontFaceObserver("Inter", {
                weight: 300
            });
            var fontB = new w.FontFaceObserver("Inter", {
                weight: 400
            });
            var fontC = new w.FontFaceObserver("Inter", {
                weight: 500
            });
            var fontD = new w.FontFaceObserver("Inter", {
                weight: 600
            });
            var fontE = new w.FontFaceObserver("Inter", {
                weight: 700
            });
            var fontF = new w.FontFaceObserver("Inter", {
                weight: 900
            });
            w.Promise.all([fontA.load(), fontC.load(), fontF.load()]).then(function() {
                w.document.documentElement.className += " fonts-loaded";
            });
        })(this);
    </script>
    <script>
        const scroll = new SmoothScroll('a[href*="#"]');
        $('a.nav-link').on('click', () => {
            const navbar = $('.navbar-collapse');
            if (navbar && navbar.hasClass('show')) {
                $('.navbar-toggler').click();
            }
        })
    </script>
    <?php wp_footer(''); ?>
</body>

</html>