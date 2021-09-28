<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blossom_Shop
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<?php
			while ( have_posts() ) : the_post(); ?>
			<img class="butik-img" src = "<?php echo get_the_post_thumbnail_url(); ?>">
        <h4 class="title" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<div class="opening"> <?php the_content(); ?> </div>
		<?php
                do_action( 'blossom_shop_after_page_content' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();