<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div class="container mt-5">
    <h1 class="mb-4 blog-title text-center">Latest blogs</h1>
    <div class="row all-blogs">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'paged'          => $paged,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                echo '<img src="' . esc_url(get_the_post_thumbnail_url(null, 'full')) . '" class="card-img-top" alt="' . get_the_title() . '">';
                                ?>
                            </a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h2 class="card-title"><a style="color: #032B43" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn read-more btn-primary">Read More</a>
                        </div>
                    </div>
                </div>


        <?php
                endwhile;
                echo '<div class="pagination pagination-class">' . paginate_links(array('total' => $query->max_num_pages)) . '</div>';

                wp_reset_postdata();
            else :
                echo 'No posts found';
            endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>