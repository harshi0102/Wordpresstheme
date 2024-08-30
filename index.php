<?php get_header(); ?>

<main id="main" role="main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="post-title"><?php the_title(); ?></h2>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
