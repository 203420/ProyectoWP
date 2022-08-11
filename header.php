<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <meta charset="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body <?php body_class();?> >

<header>
    <div class="header-img">
        LOGO1
    </div>
    <div class="header-info">
        <?php wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'nav-bar',
            )
        );?>
    </div>
</header>