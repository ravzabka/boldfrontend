 <section class="hero">
      <div class="hero__col">
        <h1 class="hero__headline"><?php the_field('hero_headline'); ?></h1>
        <p class="hero__desc"><?php the_field('hero_description');?></p>

        <?php 
          $link = get_field('cta_url');
          if( $link ): ?>
              <a class="btn" href="<?php echo esc_url( $link ); ?>" target="_blank"><?php the_field('cta_title');?></a>
          <?php endif; ?>

       

      </div>
      <div class="hero__col">

        <?php 
        $image = get_field('hero_image');
        if( !empty( $image ) ): ?>
            <img class="hero__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
       
      </div>
    </section>