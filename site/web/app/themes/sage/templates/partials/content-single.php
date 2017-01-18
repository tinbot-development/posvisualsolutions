<article <?php post_class(); ?>>
  <div class="row">
    <aside class="col-md-12">
      <?php the_post_thumbnail('full',array('class'=>'img-fluid'));?>
    </aside>
  </div>
  <header>
    <?php get_template_part('partials/entry-meta'); ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <footer>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </footer>
  <?php comments_template('/templates/partials/comments.php'); ?>
</article>
