<?php get_header(); 

while(have_posts()) {
    the_post(); ?>

    <div class="container">
        
        <h1 class="display-4"><?php the_title(); ?></h1>
        <p class="h5"><?php the_content(); ?></p>

    </div>

<?php }




get_footer();  ?>