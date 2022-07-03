<!-- custom post template -->

<!-- loading pages -->
<?php if( have_posts() ): while( have_posts()): the_post();?>

	<?php the_content(); ?>


	<div class="d-flex justify-content-between">
        <div>
            <?php 
            $tags = get_the_tags();
            if($tags):
            foreach ($tags as $tag): ?>

                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge-success">
                    <?php echo $tag->name; ?>
                    </a>
            <?php endforeach; endif;?>	
        </div>
    </div>
	



<?php endwhile; else: endif; ?>
<!-- --------- -->