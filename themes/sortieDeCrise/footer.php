<?php
/** 
 * The theme footer.
 * 
 * @package bootstrap-basic4
 */
?>
            <!-- </div> --><!--row-->
            </div><!--site-content-->

            <footer id="site-footer" class="container-fluid">
                <?php
                if(!is_single() && get_the_ID() != 957) { ?>
                    <div class="container-fluid widget-footer-contact">
                            <div class="row">
                                <div class="col-md-2 col-lg-3">
                                </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <?php dynamic_sidebar('footer-a-propos'); ?>
                                </div>
                                <div class="ligne-verticale">
                                </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <?php dynamic_sidebar('footer-nous-contacter'); ?>
                                </div>
                                <div class="col-md-2 col-lg-3">
                                </div>
                            </div>
                        </div>
                <?php } ?>
                <div class="fondrouge">
                    <div class="container">
                            <div class="row">
                                <div class="col-12">
                                <?php 
                                    wp_nav_menu(
                                        array(
                                            'menu'=>'menu footer',
                                            'depth' => '2',
                                            'theme_location' => 'primary', 
                                            'container' => false, 
                                            'menu_id' => 'bb4-primary-menu',
                                            'menu_class' => 'navbar-nav mr-auto', 
                                            'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                                        )
                                    ); 
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center reseaux-sociaux">
                                    <?php dynamic_sidebar('footer-reseaux'); ?>
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mentions">
                            <?php dynamic_sidebar('footer-mentions'); ?>
                        </div>
                    </div>  
                </div>  
            </footer><!--.page-footer-->
             
    <?php wp_footer(); ?>

    <!--axceptio -->
    <script>
    window.axeptioSettings = {
        clientId: "61af1d0bb328810244b3c752",
        cookiesVersion: "https://sortiedecrise/-base",
    };
 
    (function(d, s) {
    var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
     e.async = true; e.src = "//static.axept.io/sdk.js";
     t.parentNode.insertBefore(e, t);
    })(document, "script");
    </script>
   
    </body>
</html>