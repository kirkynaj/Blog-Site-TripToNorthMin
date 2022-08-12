<?php get_header(); 

while(have_posts()) {
    the_post(); ?>

    <div class="container">
        <br/>
        <h1 class="display-4"><?php the_title(); ?></h1>
        </br>
        <p class="h3"><?php the_content(); ?></p><br/>
        <p class="h6">Posted by: <b><?php the_author(); ?></b> on <?php the_time('F j, Y'); ?></p>
    </div>
    <br/><br/>
<?php }




get_footer();  ?>