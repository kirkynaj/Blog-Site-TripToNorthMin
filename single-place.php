<?php get_header(); 

while(have_posts()) {
    the_post(); ?>

    <div class="container">
        <br/>
        <h1 class="display-4"><?php the_title(); ?></h1>
        </br>
        <p class="h3"><?php the_post_thumbnail('medium_large') ?></p>
        <p class="h3"><?php the_content(); ?></p><br/>
        <hr/>
        <h1 class="display-6">Related Tourist Spots:</h1>
        <?php 
            $relatedTouristSpots = get_field('related_tourist_spots'); 

            foreach($relatedTouristSpots as $touristSpots) { ?>
                <br/>
                
                <p class="h6"><a href="<?php echo get_the_permalink($touristSpots); ?>"><?php echo get_the_title($touristSpots) ?></a></p>
                <?php
            }

        ?>
    <br/><br/>
    </div>
    <br/><br/>
<?php }




get_footer();  ?>