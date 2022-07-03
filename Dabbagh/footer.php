 <footer  style="direction: ltr;">
    <div class="container">
    <?php
    wp_nav_menu(
        array(

    'theme_location' => 'footer-menu',
    'menu_class' => 'footer-bar',
    )
    );
    ?>
    </div>
    <div class="d-flex justify-content-around align-items-center flex-row-reverse pt-4">
        <?php get_search_form();?>
        <div>
        <a href="https://www.instagram.com/dr.soroush.dabbagh/?hl=en" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/insta.png" style="width:45px"></a>
        <a href="https://t.me/Soroushdabbagh_Official"target="_blank"><img src="<?php bloginfo('template_directory');?>/images/telegram-logo-15.png" style="width:70px"></a>
        </div>
        <p id="design">2022&copy;Designed by:H.Zamani<span></span> </p>

    </div>
 </footer>
     
<?php wp_footer();?>
</body>
</html>