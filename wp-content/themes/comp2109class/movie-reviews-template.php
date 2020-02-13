<?php
/**
 * Template Name: Movie Reviews
 * Template Post Type: post, page, prodict
 */

get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class ="site-main" role="main">
    <section class='the-page-content'>
        <h1> <?php echo esc_html(get_the_title()); ?> </H1>
        <?php
        $query = new WP_Query(array('post_type' => 'movie-reviews',
        'post_per_page' => 10   
        ));
        while ($query -> have_posts()) : $query-> the_post(); ?>
        <div><h3> <?php the_title(); ?></h3></div>
        <div class="movie-content">
            <?php
            the_post_thumbnail();
            the_content();
            ?>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php
     endwhile;
     wp_reset_postdata();
     ?>
    </section>
    <section class="shortcode-example">
        <div><?php echo do_shortcode('[movie_shortcode]');?></div>
    </section>
    </main>
</div>  