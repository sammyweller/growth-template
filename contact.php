<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>



<div class="page-content">
        <h1 class="mb-4 contact-title text-center"><?php echo esc_html(get_field('contact-title')); ?></h1>

        <div class="d-flex justify-content-center align-items-center">
            <article class="contact-section">
                <div class="container contact-us">
                    <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="email-title"><?php echo esc_html(get_field('contact-method')); ?></label>
                        <input type="email" class="form-control form-width" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted"><?php echo esc_html(get_field('contact-privacy')); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleMessage" class="message-title"><?php echo esc_html(get_field('contact-business')); ?></label>
                        <textarea class="form-control form-width" id="exampleMessage"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleGoal" class="goal-title"><?php echo esc_html(get_field('contact-services')); ?></label>
                        <textarea class="form-control form-width" id="exampleGoal"></textarea>
                    </div>
                    <button type="submit" class="btn message-button btn-primary"><?php echo esc_html(get_field('contact-send')); ?></button>
                </form>
            </div>
        </article>
    </div>
</div>



<?php get_footer(); ?>