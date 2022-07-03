<?php get_header();?>

<section class="page-wrap">
	<div class="container text-center">

		<h1><?php the_title();?></h1>
		<div>
			<?php if(has_post_thumbnail()): ?>

				<img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mb-5">

			<?php endif; ?>	
		</div>


		<div class="row">

			<div class="col-lg-9">
			
				<?php get_template_part('includes/section','books');?>

				<div class="text-center">
					<?php previous_post_link(); ?>
					<?php next_post_link(); ?>
				</div>

				<?php wp_link_pages(); ?>
			</div>
	

		</div>



	</div>
</section>
<?php get_footer();?>




