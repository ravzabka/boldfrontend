 <section class="plans">

      <h2 class="plans__headline"><?php the_field('plans_title')?></h2> 
      <p class="plans__desc"><?php the_field('plans_desc'); ?></p>  
      <div class="plans__container">

    
       <?php $loop = new WP_Query( array( 
         'post_type' => 'plan',
         'posts_per_page' => 3,
         'order'      =>  'ASC'
         ) ); 

          while ( $loop->have_posts() ) : $loop->the_post(); ?>
          
           <div class="plans-single" data-aos="<?php the_field('animation_field'); ?>" data-aos-duration="<?php the_field('animation_time');?>" data-aos-anchor-placement="<?php the_field('animation_place'); ?>">
            <div class="plans-single__content">
                <img class="plans-single__img" src="<?php echo get_theme_file_uri('/images/plan-icon.png'); ?>" alt="">
                <h3 class="plans-single__title"><?php the_title(); ?></h3>
                <?php the_content();?> 
               
            </div>

            <div class="plans-single__btn-box">                 
                <h4 class="plans-single__value"><?php the_field('plan_value');?>
                  <?php if( get_field('plan_monthly') ) {?>
                    <span>/ mo</span>
                  <?php }?>
                </h4>  
                <a class="plans-single__btn" href="#" ><?php the_field('plan_button'); ?></a>   
            </div>       
        </div>

   <?php endwhile; wp_reset_postdata();?>
     



       

        <!-- <div class="plans-single">
            <div class="plans-single__content">
                <img class="plans-single__img" src="<?php echo get_theme_file_uri('/images/plan-icon.png'); ?>" alt="">
                <h3 class="plans-single__title">Free Plan</h3>
                
                <ul class="plans-single__list">
                  <li class="plans-single__item">Unlimited Bandwitch</li>
                  <li class="plans-single__item">Encrypted Connection</li>
                  <li class="plans-single__item">No Traffic Logs</li>
                  <li class="plans-single__item">Works on ALL Devices</li>
                  <li class="plans-single__item">Works on ALL Devices</li>
                </ul>
            </div>

            <div class="plans-single__btn-box">

                <h4 class="plans-single__value">$9<span>/ mo</span></h4>  
                <a class="plans-single__btn" href="#" >Select</a>   
            </div>       
        </div>

        <div class="plans-single">

            <div class="plans-single__content">
                <img class="plans-single__img" src="<?php echo get_theme_file_uri('/images/plan-icon.png'); ?>" alt="">
                <h3 class="plans-single__title">Free Plan</h3>
                
                <ul class="plans-single__list">
                  <li class="plans-single__item">Unlimited Bandwitch</li>
                  <li class="plans-single__item">Encrypted Connection</li>
                  <li class="plans-single__item">No Traffic Logs</li>
                  <li class="plans-single__item">Works on ALL Devices</li>
                  <li class="plans-single__item">Works on ALL Devices</li>
                  <li class="plans-single__item">Works on ALL Devices</li>
                </ul>
            </div>

            <div class="plans-single__btn-box">
              <h4 class="plans-single__value">$12<span>/ mo</span></h4>  
              <a class="plans-single__btn" href="#" >Select</a>     
            </div>

                 
        </div> -->
        
      </div>  

    </section>