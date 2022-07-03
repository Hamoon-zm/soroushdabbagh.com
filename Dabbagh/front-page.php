<?php get_header();?>
<section class="page-wrap container">
    
    <div id="hero" class="rounded mx-auto d-block img-fluid">
    </div>
    <div class="row">
       
        <div class="center">
            <?php get_template_part('includes/section','content');?>
        </div>
       
    </div>

    <ul class='d-flex justify-content-center mt-5'>
    <li ><a href="<?php bloginfo('home');?>/lectures"><img class='img-thumbnail m-2' src="<?php bloginfo('template_directory');?>/images/lec.png"></li></a>
      <li><a href="<?php bloginfo('home');?>/articles"><img class='img-thumbnail m-2' src="<?php bloginfo('template_directory');?>/images/article.png" ></li></a>
      <li><a href="<?php bloginfo('home');?>/discussions"><img class='img-thumbnail m-2' src="<?php bloginfo('template_directory');?>/images/disc.png" ></li></a>
    </ul>
    <ul class='d-flex justify-content-center mb-5'>    
      <li><a href="<?php bloginfo('home');?>/books"><img class='img-thumbnail m-2' src="<?php bloginfo('template_directory');?>/images/books.png"></li></a>
      <li><a href="<?php bloginfo('home');?>/future-events"><img class='img-thumbnail m-2' src="<?php bloginfo('template_directory');?>/images/eve.png" ></li></a>
    </ul>

    <div id="links">
            <h4> «هم اندیشان»</h4>
            <div class="d-flex flex-column">
            <a href="http://www.seratpub.com/home/">موسسه فرهنگی صراط</a>
            <a href="http://www.drsoroush.com/">دكتر عبدالكريم سروش</a>
            </div>
    </div>

</section>

<?php get_footer();?>