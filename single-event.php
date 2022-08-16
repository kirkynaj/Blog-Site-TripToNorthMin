<?php get_header(); 

while(have_posts()) {
    the_post(); ?>

    <div class="container">
        <br/>
        <h1 class="display-4"><?php the_title(); ?></h1>
        <p class="h5">⏰ <?php 
              $eventDate = new DateTime(get_field('event_date'));
              echo $eventDate->format('M d Y') ?></p>
        </br>
        <p class="h3"><?php the_post_thumbnail('medium_large') ?></p>
        <p class="h3"><?php the_content(); ?></p><br/>
        <hr/>
        <p class="h6"><a href="<?php echo site_url('events'); ?>">⇐ Go to Current Events</a></p>
    </div>
    <br/><br/>
<?php }




get_footer();  ?>