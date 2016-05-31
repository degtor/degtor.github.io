<li<?php if (! has_post_thumbnail() ) { echo ' class="no-img"'; } ?>>
   <?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(150,150));
   }?>
   <div class="entry-header">
      <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h3>
      <p class="entry-meta">
         <?php the_time("F d, Y"); ?>
      </p>
      <div class="thetags"><?php the_tags(); ?></div>
   </div>

   <?php the_content(); ?>
</li>