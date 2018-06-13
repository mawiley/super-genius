<?php get_header(); ?>

<div class="row">
  <div class="span8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="well">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><em><?php the_time('l, F jS, Y'); ?></em></p>
      <?php the_content(); ?>
      <a href="<?php the_permalink(); ?>">
        <button type="button" class="btn btn-outline-secondary">Read More</button>
      </a>
    </div>
    
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
  <div class="span4">
    <?php get_sidebar(); ?>   
  </div>
</div>


<?php get_footer(); ?>