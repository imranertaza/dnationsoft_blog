<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<div class="col-md-8">

	<div class="border content-pad blog-content">
		<div class="blog-head bottom-bordre" ><i class="fab fa-connectdevelop"></i>Blog</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 
		 <h2><a class="blog_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <div class="text_content"><?php the_excerpt(); ?><a href="<?php the_permalink();?>">READ MORE</a></div>
		 
		<?php endwhile; endif; ?>
    
    </div>
    
  </div>  
    
    
    

<?php get_sidebar(); ?>
<?php get_footer(); ?>