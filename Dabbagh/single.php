<?php get_header();?>

<section class="page-wrap">
<div class="container">


	<?php if(has_post_thumbnail()): ?>

		<img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mb-5">

	<?php endif; ?>	

	<h1><?php the_title();?></h1>

	<?php get_template_part('includes/section','blogcontent');?>
	<div class="text-center">
	<?php previous_post_link(); ?>
	<?php next_post_link(); ?>
	</div>

	<?php wp_link_pages(); ?>

		<div>
		<?php comments_template(); ?>
	</div>
</div>
</section>
<?php get_footer();?>




