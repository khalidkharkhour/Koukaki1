
<section id="#story " class="story"  >

        <h2 class="nomination " ><span id="title" >L'histoire</span></h2>
        <article id="" class="story__article hidden">
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
           
            <div class="swiper-container">
                     <h3 class="nomination " ><span id="title" >Les personnages</span></h3>
        <div class="swiper-wrapper">
 
                <?php
            while ( $characters_query->have_posts() ) {
                $characters_query->the_post();
                    echo '<div class="swiper-slide">';
                    echo '<figure>';
                    echo get_the_post_thumbnail( get_the_ID(), 'full' );
                    echo '<figcaption >';
                    the_title();
                    echo'</figcaption>';
                    echo '</figure>';
                    echo '</div>';
            };
            ?>  
            </div>
    </div>
    
        </article>
        <article id="place">
                <!-- LIGNE(S) AJOUTEE(S) -->
                <img class="place--big_cloud move-cloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="Gros nuage qui passe">
                <img class="place--little_cloud move-cloud " src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="Petit nuage qui passe">
                <!-- =================== -->
                <div>
                    <h3><span id="title" >Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
    </section>
    <section id="studio" class="studio  ">
            <h2><span id="title"  >Studio Koukaki</span></h2>
            
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
