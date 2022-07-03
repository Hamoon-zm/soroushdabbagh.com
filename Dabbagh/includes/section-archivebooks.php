<!-- loading pages -->
<?php if( have_posts() ): while( have_posts()): the_post();?>

<div class="card m-2 p-0" style="width: 14rem;">
		
		<?php if(has_post_thumbnail()): ?>

			<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="card-img-top ">

		<?php endif; ?>	
	<div class="card-body">

	<h5 class="card-title ">
		<?php the_title();?></h5>
	
		<a id="read-more" href="<?php the_permalink(); ?>" class='btn btn-secondary'>بیشتر بخوانید</a>
		
	</div>
	
</div>
<?php endwhile; else: endif; ?>
<!-- --------- -->



