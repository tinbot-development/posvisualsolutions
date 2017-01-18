<?php
/* Template Part - Page Bottom Widgets */

if( have_rows('bottom_widgets') ):

?>

<section class="bottom-widgets <?php echo (get_field('bottom_widget_position') == 'before_footer' ) ? 'container-fluid':''; ?>">
    <div class="col-md-12">
        <aside class="row">
            <div class="col-md-12 gallery-header">
                <?php the_field('gallery_header');?>
            </div>
        </aside>
        <section class="gallery">
            <div class="row">
            <?php
                    $image_number = 1;
                     while ( have_rows('bottom_widgets') ) : the_row();
                         $image = get_sub_field('image');
                         if( !empty($image) ):
                             $thumb_size = (get_field('thumbnail_size')) ? get_field('thumbnail_size') : 'bottom-widget-thumb';

                             $thumb = $image['url'];

                             $lightbox_image = get_sub_field('full_lightbox_image');
                             $full_image = ($lightbox_image == '') ? $image['url'] : $lightbox_image['url'];

                                    /* Lighbox Gallery Type */
                                     if(get_field('gallery_type') == 'lightbox')   :
                                         ?>
                                         <aside class="col-lg-3 col-md-6 img-holder <?php echo $image_number;?>">
                                             <a class="fancybox" rel="gallery-items" href="<?php echo $full_image; ?>">
                                                 <div class="img-bg" style="background:url(<?php echo $thumb; ?>); <?php echo ($thumb_size == 'portfolio-thumb-sm' ? 'padding-bottom:80%' : '')?>"></div>
                                                 <?php echo (get_sub_field('title')) ? '<h4 class="widget-heading">'. get_sub_field('title').'</h4>' : ''; ?>
                                             </a>
                                         </aside>
                                         <?php
                                     else :
                                         /* Page Link Gallery Type */
                                         ?>
                                         <aside class="col-lg-3 col-md-6 img-holder <?php echo $image_number;?>">
                                             <a href="<?php the_sub_field('page_link'); ?>">
                                                 <div class="img-bg" style="background:url(<?php echo $full_image; ?>)"></div>
                                                 <?php echo (get_sub_field('title')) ? '<h4 class="widget-heading">'. get_sub_field('title').'</h4>' : ''; ?>
                                             </a>
                                         </aside>
                                         <?php
                                     endif;
                         endif;
                        $image_number ++;
                     endwhile;

            ?>
            </div>
        </section>
        <aside class="row">
            <div class="col-md-12 gallery-footer">
                <?php the_field('gallery_footer');?>
            </div>
        </aside>
    </div>
</section>

<?php

endif;
