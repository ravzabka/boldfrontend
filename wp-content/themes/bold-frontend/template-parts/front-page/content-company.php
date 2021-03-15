 <section class="company">
        <div class="company__container">        

             <div class="company__item">
              <?php  $icon1 = get_field('service_icon_1');
              if( !empty( $icon1 ) ): ?>
              <img class="company__icon" src="<?php echo esc_url($icon1['url']); ?>" alt="<?php echo esc_attr($icon1['alt']); ?>" />
              <?php endif; ?>
              
               <div class="company__info">
                <span class="company__value" data-vanilla-counter data-start-at="0" data-end-at="<?php the_field('service_value_1');?>" data-delay="0" data-time="000" data-format="{}+">0+</span>
                <span class="company__desc"><?php the_field('service_name_1');?></span>
               </div>
             </div> 

              <div class="company__item company__item--center">
               <?php  $icon2 = get_field('service_icon_2');
              if( !empty( $icon2 ) ): ?>
              <img class="company__icon" src="<?php echo esc_url($icon2['url']); ?>" alt="<?php echo esc_attr($icon2['alt']); ?>" />
              <?php endif; ?>
               <div class="company__info">
                <span class="company__value" data-vanilla-counter data-start-at="0" data-end-at="<?php the_field('service_value_2');?>" data-delay="0" data-time="000" data-format="{}+">0+</span>
                <span class="company__desc"><?php the_field('service_name_2');?></span>
               </div>
             </div> 

              <div class="company__item">
               <?php  $icon3 = get_field('service_icon_3');
              if( !empty( $icon3 ) ): ?>
              <img class="company__icon" src="<?php echo esc_url($icon3['url']); ?>" alt="<?php echo esc_attr($icon3['alt']); ?>" />
              <?php endif; ?>
               <div class="company__info">
                <span class="company__value"data-vanilla-counter data-start-at="0" data-end-at="<?php the_field('service_value_3');?>" data-delay="0" data-time="000" data-format="{}+">0+</span>
                <span class="company__desc"><?php the_field('service_name_3');?></span>
               </div>
             </div> 

        </div>

    </section>