<?php get_header(); ?>

<div class="container">
    
    <h1 class="display-4">Past Events</h1>
    <p class="h4">Our previous Northern Mindanao Events</p>
    </br>
    
    <div class="container">

        <?php
        $today = date('Ymd');
        $pastEvents = new WP_Query(array(
          'paged' => get_query_var('paged', 1),
          'post_type' => 'event',
          'meta_key' => 'event_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'event_date',
              'compare' => '<',
              'value' => $today,
              'type' => 'numeric'
            )
          )
        ));

        while($pastEvents->have_posts()) {
        $pastEvents->the_post(); ?>
        <div class="card">
            <h5 class="card-header"><?php the_title(); ?></h5>
            <div class="card-body">
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
        <?php echo paginate_links(array(
            'total' => $pastEvents->max_num_pages
        )); ?>

    </div>
</div>

<?php get_footer(); ?>
