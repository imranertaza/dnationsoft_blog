<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="col-md-8">
	<div class="border content-pad blog-content">
		<div class="blog-head bottom-bordre" ><i class="fab fa-connectdevelop"></i>Blog</div>
		<?php if ( have_posts() ) : the_post(); ?>
		 
		 <h2><a class="blog_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <div class="text_content"><?php the_content(); ?></div>
		 
		<?php endif; ?>
    
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>