<?php get_header();?>

<div class="img-background">
    <h1 class="main-title"> <?php the_title();?> </h1>
    <div class="main-text"> <?php the_content();?> </div>
    <a href="#more-info"><button class="main-button">Mas información</button></a>
</div>

<div id="more-info"> 
    <div class="text">
        <h2 class='section-title'>Información</h2>
        <div class="info-text">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
        </div>  
    </div>
    <div class="side-img">
        a
    </div>
</div>

<?php get_footer();?>
