<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
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



    <section id="studio">
        <h2 class="nomination "><span class="title scrolled">Studio Koukaki</span></h2>
        <div>

            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>
    <!-- LIGNE(S) AJOUTEE(S) -->
    <figure>
        <img class="flower" src="<?php echo get_theme_file_uri() . '/assets/images/Sunflower.png'; ?>">

        <img class="flower" src="<?php echo get_theme_file_uri() . '/assets/images/orchid.png'; ?>">

    </figure>
    <section id="nomination">
        <div>

            <h3 class="nomination"><span class="title scrolled "> d’oranger & chats errants<br> est nominé aux Oscars Short<br> Film Animated de 2022 !</span></h3>
        </div>
        <div> <img src="<?php echo get_theme_file_uri() . '/assets/images/orange_nomination_bg.png'; ?>" alt="fond du titre des nominations" data-text="Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !"></div>


    </section>

    <!-- =================== -->
</main><!-- #main -->

<?php
get_footer();
