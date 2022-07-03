<!-- archive page for custom post -->
<?php get_header();?>

<section class="page-wrap">
	
<div class="container">

	<section class="row">
       
			<?php if( is_active_sidebar('page-sidebar')): ?>

				<?php dynamic_sidebar('page-sidebar');?>

			<?php endif; ?>	
				
		<?php get_template_part('includes/section','archivebooks');?>
		<?php the_posts_pagination(); ?>
		
	</section>
</div>
</section>
<?php get_footer();?>
