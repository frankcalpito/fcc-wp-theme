<?php

$header_nav_position = get_theme_mod('hn_position');

//header nav position
if( $header_nav_position != '' ) {
    switch ( $header_nav_position ) {
        case 'left':
            echo 
                '<script>
                    jQuery(document).ready(function(){
                        jQuery("#header-nav").find(".navbar-right").removeClass("navbar-right");
                        jQuery("#header-nav").find(".nav-justified").removeClass("nav-justified");
                    });
                </script>';
        break;
        case 'right':
            echo 
                '<script>
                    jQuery(document).ready(function(){
                        jQuery("#header-nav").find(".navbar-nav").addClass("navbar-right");
                    });
                </script>';
        break;
        case 'center':
            echo 
                '<script>
                    jQuery(document).ready(function(){
                        jQuery("#header-nav").find(".navbar-nav").addClass("nav-centered");
                    });
                </script>';
        break;
        case 'justify':
            echo 
                '<script>
                    jQuery(document).ready(function(){
                        jQuery("#header-nav #bs-example-navbar-collapse-1 .nav").addClass("nav-justified");
                        jQuery("#header-nav #bs-example-navbar-collapse-1 .nav").removeClass("navbar-nav");
                    });
                </script>';
        break;
    }
}