<?php
    get_header();   
?>

<section class="intro-section">
    <div class="intro container">
        <div class="intro-details text-center">
                <h1><?php echo esc_html(get_field('title-top')); ?></h1>
                <h1 class="green-title"><?php echo esc_html(get_field('title-green')); ?></h1>
                <?php $introImage = get_field('intro-image'); ?>
                <img src="<?php echo esc_url($introImage['url']); ?>" class="intro-pic" alt="<?php echo esc_attr($introImage['alt']); ?>">
        </div> <!--end of intro text-->
    </div>
</section>


    <section id="about-us" class="who-section">
        <div class="who container">
            <div class="who-content row">
                <div class="who-text col-xs-12 col-lg-6">
                    <h2 class="h2-who-title"><?php echo esc_html(get_field('who-title')); ?></h2>
                    <p class="p-who"><?php echo esc_html(get_field('who-description')); ?></p>
                    <div class="cta-who">
                        <a href="<?php echo home_url('/contact'); ?>" class="book-consult"><?php echo esc_html(get_field('who-button')); ?></a>
                        <a href="<?php echo home_url('/#products'); ?>" class="about-services"><?php echo esc_html(get_field('about-services')); ?> &rsaquo;</a>
                    </div>
                </div>
                <div class="image-who col-xs-12 col-lg-6">
                <?php $whoImage = get_field('who-main-image'); ?>
                <img src="<?php echo esc_url($whoImage['url']); ?>" class="who-section--img" alt="<?php echo esc_attr($whoImage['alt']); ?>">      
                             
                <div class ="who-overlay--bg">
                <?php $icon1 = get_field('icon-1'); ?>
                <img src="<?php echo esc_url($icon1['url']); ?>" class="who-overlay--img" alt="<?php echo esc_attr($icon1['alt']); ?>">
                </div>
                </div>
            </div> <!--end of who-content-->
        </div>
    </section>



    <section class="what-section">
        <div class="what container">
            <div class="what-content row">
                <div class="image-what col-xs-12 col-lg-6">
                <?php $whatImage = get_field('what-main-image'); ?>
                    <?php if ($whatImage && is_array($whatImage)) : ?>
                        <img src="<?php echo esc_url($whatImage['url']); ?>" class="what-section--img" alt="<?php echo esc_attr($whatImage['alt']); ?>">
                    <?php endif; ?>
                    <div class ="what-overlay1--bg">
                        <?php $icon2 = get_field('icon-2'); ?>
                        <?php if ($icon2 && is_array($icon2)) : ?>
                            <img src="<?php echo esc_url($icon2['url']); ?>" class="what-overlay1--img" alt="<?php echo esc_attr($icon2['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <div class ="what-overlay2--bg">
                        <?php $icon3 = get_field('icon-3'); ?>
                        <?php if ($icon3 && is_array($icon3)) : ?>
                            <img src="<?php echo esc_url($icon3['url']); ?>" class="what-overlay2--img" alt="<?php echo esc_attr($icon3['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <div class ="what-overlay3--bg">
                        <?php $icon4 = get_field('icon-4'); ?>
                        <?php if ($icon4 && is_array($icon4)) : ?>
                            <img src="<?php echo esc_url($icon4['url']); ?>" class="what-overlay3--img" alt="<?php echo esc_attr($icon4['alt']); ?>">
                        <?php endif; ?>
                    </div>

                </div>
                <div class="what-text col-xs-12 col-lg-6">
                    <h2 class="h2-what-title"><?php echo esc_html(get_field('what-title')); ?></h2>
                    <p class="p-what"><?php echo esc_html(get_field('what-description')); ?></p>
                    <a href="<?php echo home_url('/contact'); ?>" class="book-consult"><?php echo esc_html(get_field('what-button')); ?></a>
                </div>
            </div> <!--end of what-content-->
        </div>
    </section>


    <section id="products"  class="products-section">
        <div class="products container text-center">
            <div class="title-products">
                <h2 class="h2-products-top"><?php echo esc_html( get_field('products-title-top') ); ?></h2>
                <h2 class="h2-products-bottom"><?php echo esc_html( get_field('products-title-green') ); ?></h2>
            </div>
            <div class="products-details">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="product-1 d-flex flex-column">
                            <div class="product-1-top " style=" border-radius: 15px 15px 0 0;">
                                <h3 class="product-title"><?php echo esc_html( get_field('1-product-title') ); ?></h3>
                                <p class="price"><?php echo esc_html( get_field('1-product-price') ); ?><span class="per-month"><?php echo esc_html( get_field('1-product-price-schedule') ); ?></span></p>
                                <p class="product-best"><?php echo esc_html( get_field('1-product-description') ); ?></p>
                                <a href="<?php echo home_url('/contact'); ?>" class="book-consult-2"><?php echo esc_html( get_field('1-product-button') ); ?></a>
                            </div>
                            <div class="product-bottom" style=" border-radius: 0 0 15px 15px; box-shadow: 0px 45px 82px -8px rgba(3, 43, 67, 0.10);">
                                <ul>
                                    <li><?php echo esc_html( get_field('1-list-item-1') ); ?></li>
                                    <li><?php echo esc_html( get_field('1-list-item-2') ); ?></li>
                                    <li><?php echo esc_html( get_field('1-list-item-3') ); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-2 d-flex flex-column">
                            <div class="product-2-top" style=" border-radius: 15px 15px 0 0;">
                                <h3 class="product-title"><?php echo esc_html( get_field('2-product-title') ); ?></h3>
                                <p class="price"><?php echo esc_html( get_field('2-product-price') ); ?><span class="per-month"><?php echo esc_html( get_field('2-product-price-schedule') ); ?></span></p>
                                <p class="product-best"><?php echo esc_html( get_field('2-product-description') ); ?></p>
                                <a href="<?php echo home_url('/contact'); ?>" class="book-consult-3"><?php echo esc_html( get_field('2-product-button') ); ?></a>
                            </div>
                            <div class="product-bottom" style=" border-radius: 0 0 15px 15px; box-shadow: 0px 45px 82px -8px rgba(3, 43, 67, 0.10);">
                                <ul>
                                    <li><?php echo esc_html( get_field('2-list-item-1') ); ?></li>
                                    <li><?php echo esc_html( get_field('2-list-item-2') ); ?></li>
                                    <li><?php echo esc_html( get_field('2-list-item-3') ); ?></li>
                                    <li><?php echo esc_html( get_field('2-list-item-4') ); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-3 d-flex flex-column">
                            <div class="product-3-top" style=" border-radius: 15px 15px 0 0;">
                                <h3 class="product-title"><?php echo esc_html( get_field('3-product-title') ); ?></h3>
                                <p class="price"><?php echo esc_html( get_field('3-product-price') ); ?><span class="per-month"><?php echo esc_html( get_field('3-product-price-schedule') ); ?></span></p>
                                <p class="product-best"><?php echo esc_html( get_field('3-product-description') ); ?></p>
                                <a href="<?php echo home_url('/contact'); ?>" class="book-consult-2"><?php echo esc_html( get_field('3-product-button') ); ?></a>
                            </div>
                            <div class="product-bottom" style=" border-radius: 0 0 15px 15px; box-shadow: 0px 45px 82px -8px rgba(3, 43, 67, 0.10);">
                                <ul>
                                    <li><?php echo esc_html( get_field('3-list-item-1') ); ?></li>
                                    <li><?php echo esc_html( get_field('3-list-item-2') ); ?></li>
                                    <li><?php echo esc_html( get_field('3-list-item-3') ); ?></li>
                                    <li><?php echo esc_html( get_field('3-list-item-4') ); ?></li>
                                    <li><?php echo esc_html( get_field('3-list-item-5') ); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-section">
        <div class="reviews container text-center">
            <h2 class="reviews-title"><?php echo esc_html( get_field('reviews-title') ); ?></h2>
            <div class="swipebox-container">
                <div class="swipebox-wrapper">
                    <div class="swipebox">
                        <p class="text-review"><?php echo esc_html( get_field('1-review-text') ); ?></p>
                        <p class="text-person"><?php echo esc_html( get_field('1-review-person') ); ?></p>
                    </div>
        
                    <div class="swipebox">
                        <p class="text-review"><?php echo esc_html( get_field('2-review-text') ); ?></p>
                        <p class="text-person"><?php echo esc_html( get_field('2-review-person') ); ?></p>
                    </div>
    
                    <div class="swipebox">
                        <p class="text-review"><?php echo esc_html( get_field('3-review-text') ); ?></p>
                        <p class="text-person"><?php echo esc_html( get_field('3-review-person') ); ?></p>
                    </div>
                </div>

                <div class="dots-container">
                    <div class="dot" data-index="0"></div>
                    <div class="dot" data-index="1"></div>
                    <div class="dot" data-index="2"></div>
                </div>

            </div> <!-- end of swipebox container -->
        </div><!-- end of reviews -->
    </section>


<?php 
    get_footer();
?>