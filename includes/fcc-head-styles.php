<?php
$example_position = get_theme_mod( 'logo_placement' );
$logo_width = get_theme_mod('logo_width');
$logo_height = get_theme_mod('logo_height');

echo '<style type="text/css">';
// logo position
if( $example_position != '' ) {
    switch ( $example_position ) {
        case 'left':
            //default
        break;
        case 'right':
            echo '#header #logo{ 
                float: right; 
            }';
        break;
        case 'center':
            echo '#header{ text-align: center; }';
            echo '#header #logo{ float: none; margin-left: auto; margin-right: auto; }';
        break;
    }
}

//logo width and height
if( $logo_width != '' || $logo_height != ''){
    echo '#header #logo{ 
        width: '.$logo_width.';
        height: '.$logo_height.';
    }';
}
else
{
    echo '#header #logo{ 
        width: 200px;
        height: auto;
    }';
}


//body bg

$body_bg_image = get_theme_mod('fcc_body_bg_image');

if($body_bg_image !== ''){
    echo '#wrapper { 
            background: url("'.$body_bg_image.'") fixed no-repeat;
            background-size: cover;
        }';
}

$main_content_bg_color = get_theme_mod('main_content_bg_color');
$main_content_color = get_theme_mod('main_content_color');

echo '#main-content {
            background:'.$main_content_bg_color.';
            color:'.$main_content_color.';
        }';

$primary_bg_color = get_theme_mod('primary_bg_color');
$primary_color = get_theme_mod('primary_color');
$secondary_bg_color = get_theme_mod('secondary_bg_color');
$secondary_color = get_theme_mod('secondary_color');

echo '#footer-bottom, .navbar-collapse, .dropdown-menu li, 
        .dropdown-menu a, .dropdown-menu > .active > a, .dropdown-menu{
            background:'.$primary_bg_color.' !important;
        }

        .nav a, #footer-bottom{
            color:'.$primary_color.' !important;    
        }
    ';

echo '#header-nav, #footer-top{
            background:'.$secondary_bg_color.' !important;
            color:'.$secondary_color.';
        }';


echo '</style>';