<?php get_header(); 

while(have_posts()) {
    the_post(); ?>

    <div class="container">
        <br/>
        <h1 class="display-4"><?php the_title(); ?></h1>
        </br>
        <p class="h3"><?php the_content(); ?></p><br/>
        <p class="h6"><a href="<?php echo site_url('events'); ?>">⇐ Go to all events</a></p>
    </div>
    <br/><br/>
<?php }




get_footer();  ?>