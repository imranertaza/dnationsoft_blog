<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="portfolio_box">

	<div class="left_content">
		<h1>Blog</h1>
		<?php if ( have_posts() ) : the_post(); ?>
		 
		 <h2><a class="blog_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <div class="text_content"><?php the_content(); ?></div>
		 
		<?php endif; ?>
    
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>