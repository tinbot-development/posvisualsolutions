<?php
        /* Template Part - Home Bottom Widgets */
?>


<section class="bottom-widgets container-fluid">
    <div class="col-md-12">
        <section class="row">
            <?php
            if( have_rows('bottom_widgets') ):

             	// loop through the rows of data
                while ( have_rows('bottom_widgets') ) : the_row();

                    $image = get_sub_field('image');

                        if( !empty($image) ):
                            $size = 'bottom-widget-thumb';
                            $thumb = $image['sizes'][ $size ];

                    ?>
                    <aside class="col-lg-3 col-md-6 img-holder" >
                        <a href="<?php the_sub_field('page_link'); ?>">
                            <div class="img-bg" style="background:url(<?php echo $thumb; ?>)"></div>
                            <h4 class="widget-heading"><?php the_sub_field('title'); ?></h4>
                        </a>

                    </aside>
                <?php
                        endif;
                endwhile;

            endif;
            ?>
        </section>
    </div>
</section>

