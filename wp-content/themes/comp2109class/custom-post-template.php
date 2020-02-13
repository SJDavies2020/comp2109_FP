<?php
/*
* Template Name: Working With Post Templates
* Template Post Type: post
*/
get_header();
?>
<div class="wrap">
    <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
            if (have_posts()) : while(have_posts()) : the_post()
        ?>
        <div>
            <div>
                <?php the_post_thumbnail( );?>
            </div>
            <div>
                <?php the_title();?>
                <?php the_content();?>
                <p><?php the_author();?></p>
                <p><?php echo get_the_date ( );?></p>
                <p><?php the_tags();?></p>
                <?php
                   the_post_navigation(
                    array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
                            '<span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
                            '<span class="post-title">%title</span>'
                    )
                );
                ?>
            </div>
        </div>
            <?php endwhile; ?>
            <?php endif;?>
            <article class = "sidebar">
                <?php get_sidebar(); ?>
            </article>
            <section class="comment-section-container">
                <?php
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                ?>
            </section>
    </main>
    </div>
</div>