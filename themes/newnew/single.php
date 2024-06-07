<?php the_post(); ?>
<?php get_header();?>
<main class="container my-5">
    <h1 class="mt-5">Dit is mijn eerste titel</h1>
    <div class="col-lg-8 px-0">
        <p class="fs-5">
            Intro
        </p>
        <p>
        <?php 
            the_post_navigation(
                [
                    'next_text' => __( 'Next post', 'm8prog' ),
                    'prev_text' => __( 'Previous post:', 'm8prog' ),
                ] 
            );

            the_date();
            echo get_avatar( get_the_author_meta('user_email'), '80', '-' ); 
            the_author_meta('description');
        ?>
        </p>
    </div>
</main>
<?php 
?>
<?php get_footer();?>


