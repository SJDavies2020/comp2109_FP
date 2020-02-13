<?php
/*
* Template Name: Working With Post Templates - Filtered
* Template Post Type: page
*/
get_header();
?>
<?php
    $args = array(
        'post_type' => 'post' ,
        'post_status' => 'publish',
        'order' => 'DESC',
        'category' => 'test one',
        'post_per_page' => '2',
);
$arr_posts = new WP_Query($args);
// next array
$args1 = array(
    'post_type' => 'post' ,
    'post_status' => 'publish',
    'order' => 'DESC',
    'category' => 'test two',
    'post_per_page' => '2',
);
$arr_posts1 = new WP_Query($args1);
?>

<section class ="post-container"> 
    <h2> Filter By Category Name : Test One</h2>
    <?php
    if ($arr_posts -> have_posts()) :
    while($arr_posts -> have_posts()):
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div>
            <php
            if ( has_post_thumbnail()) :
            the_post_thumbnail();
            ?>
        </div>
        <div>
            <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
                <?php the-excerpt(); ?>
            </div>
        </div>
    </article>
    <?php
    endwhile;
    endif;
    ?>
</section>
