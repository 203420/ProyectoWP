<!DOCTYPE html>
<html>
    <head>

        <?php wp_head();?>

    </head>
<body <?php body_class();?> >

<header>
    <div class="header-img">
        LOGO
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