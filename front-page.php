<?php
get_header();
$should_use_fallback = is_mobile();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <div class="video-background">
            <?php if ($should_use_fallback) : ?>
                <img src="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>" alt="Fallback Image">
            <?php else : ?>
                <video autoplay loop muted playsinline>
                    <source src="<?php echo get_theme_file_uri() . '/assets/images/studio.mp4'; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        </div>

        <div class="scroll-container">
            <img class="bannerlogo " data-parallax="15" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
        </div>
    </section>




    <?php
    // Inclure le fichier base-data.php
    include_once 'template-parts/base-data.php';

    // Inclure le fichier characters-slider.php
    get_template_part('template-parts/characters', 'slider');
    ?>


    <figure>
        <img class="flower flower1" src="<?php echo $flower_images['sunflower']; ?>">
        <img class="flower" src="<?php echo $flower_images['orchid']; ?>">
    </figure>


    <section id="nomination">
        <div>
            <h3 class="nomination  "><span id="title"><?php echo $nomination_text['title']; ?></span></h3>
        </div>
        <div> <img src="<?php echo $nomination_text['image']; ?>" alt="<?php echo $nomination_text['alt']; ?>" data-text="<?php echo $nomination_text['title']; ?>"></div>
    </section>

    <!-- =================== -->
</main><!-- #main -->

<?php
get_footer();
