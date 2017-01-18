<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>

<a class="comments" href="<?php comments_link(); ?>"><i class="fa fa-comment" aria-hidden="true"></i><?php echo get_comments_number();?></a>
