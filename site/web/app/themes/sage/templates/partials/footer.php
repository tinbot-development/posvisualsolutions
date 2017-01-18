<?php the_field('before_footer_content');?>

<footer class="content-info clearfix">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery(".fancybox").fancybox({
      padding : 2,
      helpers	: {
        thumbs	: {
          width	: 50,
          height	: 50
        }
      }
    });
  });
</script>
