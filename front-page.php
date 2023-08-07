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
</main>




    <section id="#story" class="story">
        <h2><span class="nomination title  ">L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>
        <article id="characters">
            <div class="main-character">
                <h3><span class="nomination title  ">Les personnages</span></h3>
                <?php
                $main_character = $characters_query->posts[0];
                echo '<figure>';
                echo get_the_post_thumbnail($main_character->ID, 'full');
                echo '<figcaption>' . $main_character->post_title . '</figcaption>';
                echo '</figure>';
                $characters_query->next_post();
                ?>
            </div>
            <div class="other-characters">
                <?php
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                    echo '<figure>';
                    echo get_the_post_thumbnail(get_the_ID(), 'full');
                    echo '<figcaption>';
                    the_title();
                    echo '</figcaption>';
                    echo '</figure>';
                }
                ?>
            </div>
        </article>
        <article id="place">
            <div>
                <h3 ><span class="nomination title  ">Le Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>


    <section id="studio">
        <h2  ><span class="nomination title  ">Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>
    <!-- LIGNE(S) AJOUTEE(S) -->
    <section id="nomination" >
        <div >

           <img src ="<?php echo get_theme_file_uri(). "./assets/images/orchid.png";?>">
           <img src = "<?php echo get_theme_file_uri() ."./assets/images/Sunflower.png";?>">
            <h3 class="nomination" ><span class=" title "> d’oranger & chats errants<br> est nominé aux Oscars Short<br> Film Animated de 2022 !</span></h3>
            </div>
        <div >
            <img src="<?php echo get_theme_file_uri() . '/assets/images/orange_nomination_bg.png'; ?>" alt="fond du titre des nominations" data-text="Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !">
            </div>
    </section>


    <!-- =================== -->
</main><!-- #main -->

<?php
get_footer();
