<?php
// Template Part: Home Slider
?>

<div id="carousel-home-slider" class="carousel slide carousel-fade" data-ride="carousel" data-pause="">
    <ol class="carousel-indicators">
        <li data-target="#carousel-home-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-home-slider" data-slide-to="1"></li>
        <li data-target="#carousel-home-slider" data-slide-to="2"></li>
        <li data-target="#carousel-home-slider" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <aside class="slider-wrap">
            <div class="slider-text-inner">
                <div class="slider-text animated fadeInDown">
                    <div class="textBg">
                        <?php the_field('banner_content');?>
                        <h3>Welcome to</h3>
                        <h1>POS Visual Solutions</h1>
                        <p>National Point of Sale and Signage Solution Services.</p>
                        <a class="btn btn-default slider-btn" href="http://www.posvisualsolutions.com.au/portfolio.html">View Portfolio</a>
                    </div>
                </div>
            </div>
        </aside>

        <div class="carousel-item active">
            <img src="<?php echo UPLOADS_URL;?>/2016/10/sl1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="<?php echo UPLOADS_URL;?>/2016/10/sl2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="<?php echo UPLOADS_URL;?>/2016/10/sl3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img src="<?php echo UPLOADS_URL;?>/2016/10/sl4.jpg" alt="Fourth slide">
        </div>
    </div>
    <a class="left carousel-control sr-only" href="#carousel-home-slider" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control sr-only" href="#carousel-home-slider" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>