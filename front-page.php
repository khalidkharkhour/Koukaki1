<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner ">
        <div class="video-background">
            <video autoplay loop muted playsinline>
                <source src="<?php echo get_theme_file_uri() . '/assets/images/studio.mp4'; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="scroll-container">
            <img class="bannerlogo " data-parallax="15" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
        </div>
    </section>




    <?php
    // include_once  
    get_template_part('template-parts/characters', 'slider');
    ?>



    <figure>
        <img class="flower flower1" src="<?php echo get_theme_file_uri() . '/assets/images/Sunflower.png'; ?>">
        <img class="flower" src="<?php echo get_theme_file_uri() . '/assets/images/orchid.png'; ?>">

    </figure>

    <section id="nomination">
        <div>

            <h3 class="nomination fade-in "><span id="title"> d’oranger & chats errants<br> est nominé aux Oscars Short<br> Film Animated de 2022 !</span></h3>
        </div>
        <div> <img src="<?php echo get_theme_file_uri() . '/assets/images/orange_nomination_bg.png'; ?>" alt="fond du titre des nominations" data-text="Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !"></div>


    </section>

    <!-- =================== -->
</main><!-- #main -->

<?php
get_footer();
