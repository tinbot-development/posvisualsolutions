<article <?php post_class(); ?>>
  <div class="row">
    <aside class="col-md-12 text-xs-center">
      <?php the_post_thumbnail('blog-thumb-md',array('class'=>'img-fluid'));?>
    </aside>
  </div>
  <header>
    <?php get_template_part('partials/entry-meta'); ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
