<?php require 'base-data.php'; ?>
<section id="#story " class="story">

    <h1 class="nomination "><span id="title">L'histoire</span></h1>
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
            <h3 class="nomination"><span id="title">Les personnages</span></h3>
            <div class="swiper-wrapper">

                <?php
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                    echo '<div class="swiper-slide">';
                    echo '<figure>';
                    echo get_the_post_thumbnail(get_the_ID(), 'full');
                    echo '<figcaption >';
                    the_title();
                    echo '</figcaption>';
                    echo '</figure>';
                    echo '</div>';
                };
                ?>
            </div>
        </div>

    </article>
    <article id="place">
        <!-- LIGNE(S) AJOUTEE(S) -->
        <?php foreach ($cloud_images as $cloud_type => $cloud_data) : ?>
    <img 
        class="<?php echo $cloud_data['class']; ?>" 
        src="<?php echo $cloud_data['src']; ?>" 
        alt="<?php echo $cloud_data['alt']; ?>"
    >
<?php endforeach; ?>

        <!-- =================== -->
        <div>
            <h3><span id="title">Le Lieu</span></h3>
            <p><?php echo get_theme_mod('place'); ?></p>
        </div>

    </article>
</section>


<section id="studio" class="studio  ">
    <?php echo $studio['title_studio']; ?>

    <div>
        <?php echo $studio['p_studio']; ?>
    </div>
</section>