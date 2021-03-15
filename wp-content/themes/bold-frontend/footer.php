<footer class="footer">
    <div class="container">
       <div class="footer__container">   


    
      <div class="footer__col">
        
        <?php echo theme_get_custom_logo(); ?>
        <p class="footer__desc"><?php echo get_theme_mod('ju_footer_desc_text');?></p>
        <div class="social">
           <?php 

          if(get_theme_mod('ju_facebook_handle')){ ?>
          <a href="https://facebook.com/<?php echo get_theme_mod('ju_facebook_handle');?>" ><img class="social__image" src="<?php echo get_theme_file_uri('/images/Facebook.png'); ?>" alt=""></a>                
           <?php } ?>    



          <a href="#"><img class="social__image" src="<?php echo get_theme_file_uri('/images/Twitter.png'); ?>" alt=""></a>
          <a href="#"><img  class="social__image"src="<?php echo get_theme_file_uri('/images/Instagram.png'); ?>" alt=""></a>        
        </div>
        <p class="footer__copyrights"><?php echo get_theme_mod('ju_footer_copyright_text');?></p>
      </div>

      <div class="footer__col">      

        <?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) { ?>   
          <?php dynamic_sidebar('footer-sidebar-1'); ?>
        <?php } ?>
        
      </div>

      <div class="footer__col">
          <?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) { ?>   
          <?php dynamic_sidebar('footer-sidebar-2'); ?>
        <?php } ?>
      </div>

      <div class="footer__col">
        <?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) { ?>   
          <?php dynamic_sidebar('footer-sidebar-3'); ?>
        <?php } ?>
       
      </div>
    </div>
      
    </div>
   


  </footer>

<?php wp_footer(); ?>
</body>
</html>