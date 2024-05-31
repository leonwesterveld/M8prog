<?php get_header();?>
<?php the_post(); ?>
<main class="container my-5">
    <h1 class="mt-5">Dit is mijn eerste titel</h1>
    <div class="col-lg-8 px-0">
        <p class="fs-5">
            Intro
        </p>
        <p>
            Content
        </p>
    </div>
</main>
<?php 
// Start with a if statement
if ( have_posts() ) :

	// Loop trough the posts
	while ( have_posts() ) :
	    // Load the data post data
		the_post();
		?>
        <main class="container my-5">
            <h1 class="mt-5"><?php the_title() ?></h1>
            <div class="col-lg-8 px-0">
                <?php the_excerpt() ?>
            </div>
        </main>
	    <?php
	endwhile;

else: 
    echo 'Volgens mij zoek je iets dat er niet is';
endif;
?>
<?php get_footer();?>


