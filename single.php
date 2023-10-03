<?php
get_header();
?>

<div class="main-wrapper">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); 
    ?>
            <header class="page-title theme-bg-light text-center gradient py-5">
                <h1 class="heading"><?php the_title(); ?></h1>
            </header>
            <article class="content px-3 py-5 p-md-5">
                <div class="container">
                    <header class="content-header">
                        <div class="meta mb-3">
                            <span class="date">Published <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
                        </div>
                    </header>

                    <div class="content-body">
                        <?php
                        if (has_post_thumbnail()) :
                        ?>
                            <figure class="blog-banner">
                            <div class="container d-flex justify-content-center">
    <a href="<?php the_permalink(); ?>">
        <img class="img-fluid header-image mx-auto" src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="header image">
    </a>
</div>
                            </figure>
                        <?php endif; ?>

                        <?php the_content(); ?>

                    </div>

                    <nav class="blog-nav nav nav-justified my-5">
                        <div class="nav-link-prev nav-item nav-link rounded-left">
                            <?php previous_post_link('%link', 'Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i>'); ?>
                        </div>
                        <div class="nav-link-next nav-item nav-link rounded-right">
                            <?php next_post_link('%link', 'Next<i class="arrow-next fas fa-long-arrow-alt-right"></i>'); ?>
                        </div>
                    </nav>
                </div>
                <!--//container-->
            </article>
    <?php
        }
    }
    ?>
</div>

<?php
get_footer();
?>