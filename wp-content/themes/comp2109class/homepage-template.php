<?php
/**
 * Template Name: Home Page Template
 * The front page template file
 */
get_header();
/** require 'header.php */
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()) {
            while (have_posts()){

                the_post();
                get_template_part('template-parts/content/content');
            }
        twentynineteen_the_post_navigation();
        } else{
            get_template_part('template-parts/content/content',none);
        }
        ?>
    </main>

 

    
</div>
