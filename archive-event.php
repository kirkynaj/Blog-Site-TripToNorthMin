<?php get_header(); ?>

<div class="container">
    
    <h1 class="display-4">All Events</h1>
    <p class="h4">Visit our latest events today!</p>
    </br>
    
    <div class="container">

        <?php
        while(have_posts()) {
        the_post(); ?>
        <div class="card">
            <h5 class="card-header"><?php the_title(); ?></h5>
            <div class="card-body">
                <p class="card-text"><?php the_post_thumbnail('medium') ?></p>
                <p class="card-text">⏰ <?php 
                    $eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('M d Y') ?>
                </p>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
            </div>
        </div>
        </br>
        <?php } ?>
        <?php echo paginate_links(); ?>
        <hr/>
        <p class="h6"><a href="<?php echo site_url('past-events'); ?>">⇐ Go to Past Events</a></p><br/><br/>
    </div>
</div>

<?php get_footer(); ?>
