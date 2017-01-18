<?php
/**
 * Shortcodes
 */

//allow shortcodes on text widgets
add_filter('widget_text', 'do_shortcode');

//shortcode for the install directory
function site_url_shortcode(){
    return site_url();
}
add_shortcode( 'site_url', 'site_url_shortcode' );


//shortcode for the install directory
function home_url_shortcode(){
    return home_url();
}
add_shortcode( 'home_url', 'home_url_shortcode' );

//shortcode for the upload directory
function upload_url_shortcode(){
    $upload_dir = wp_upload_dir();
    return $upload_dir['baseurl'];
}
add_shortcode( 'upload_url', 'upload_url_shortcode' );

//shortcode for the theme directory
function theme_url_shortcode(){
    return get_stylesheet_directory_url();
}
add_shortcode( 'theme_url', 'theme_url_shortcode' );


//shortcode for the theme images directory
function theme_images_url_shortcode(){
    return IMAGES_URL;
}
add_shortcode( 'theme_images_url', 'theme_images_url_shortcode' );

add_shortcode('pb_button','pb_button_shortcode');

function pb_button_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'class'  => 'btn',
            'link'  => '',
        ) , $atts
    );

    extract($atts);

    $output = '<a class="btn '. $class.'"  href="'.$link.'">'.$content.'</a>';

    return $output;

}

/**
 *  Gallery Shortcode
 */
add_shortcode('pos_gallery','pos_gallery_shortcode');

function pos_gallery_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'id'  => '',
            'type'  => 'lightbox',
        ) , $atts
    );

    extract($atts);

    $header_content = get_field('gallery_header',$id);
    $footer_content =  get_field('gallery_footer',$id);

    $output ='';


        if( have_rows('gallery',$id) ):
            $output .= <<<EOF
        <section class="gallery-widgets">
                <div class="col-md-12">
                    <aside class="row">
                        <div class="col-md-12 gallery-header">$header_content</div>
                    </aside>
                    <section class="gallery">
                        <div class="row">
EOF;

                            $image_number = 1;
                            while ( have_rows('gallery',$id) ) : the_row();
                                $image = get_sub_field('image',$id);
                                if( !empty($image) ):
                                    $thumb_size = (get_field('thumbnail_size',$id)) ? get_field('thumbnail_size',$id) : 'bottom-widget-thumb';

                                    $thumb = $image['url'];

                                    $lightbox_image = get_sub_field('full_lightbox_image',$id);
                                    $full_image = ($lightbox_image == '') ? $image['url'] : $lightbox_image['url'];
                                    $image_title = (get_sub_field('title',$id)) ? '<h4 class="widget-heading">'. get_sub_field('title',$id).'</h4>' : '';
                                    $image_padding = ($thumb_size == 'portfolio-thumb-sm') ? ' padding-bottom:80%' : '';
                                    $image_css_styles = 'background:url('.$thumb.');' . $image_padding;


                                        $output .= <<<EOF
                                        <aside class="col-lg-3 col-md-6 img-holder $image_number">
                                            <a class="fancybox" rel="gallery-items" href="$full_image">
                                                <div class="img-bg" style="$image_css_styles"></div>
                                                $image_title
                                            </a>
                                        </aside>
EOF;

                                endif;
                                $image_number ++;
                            endwhile;
                    $output .= <<<EOF
                        </div>
                    </section>
                    <aside class="row">
                        <div class="col-md-12 gallery-footer">$footer_content</div>
                    </aside>
                </div>
            </section>
EOF;

        endif;





    return $output;

}

/**
 *  Generate Gallery Shortcode for ACF Field
 */
add_shortcode('pos_generate_gallery_shortcode','pos_generate_gallery_shortcode_function');

function pos_generate_gallery_shortcode_function($atts, $content){
    $atts = shortcode_atts(
        array(
            'id'  => get_the_ID(),
        ) , $atts
    );

    extract($atts);

    $output = '[pos_gallery id="'.$id.'"]';

    return $output;

}
