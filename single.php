<?php get_header(); 

while(have_posts()) {
    the_post(); ?>

    <div class="container">
        <br/>
        <h1 class="display-4"><?php the_title(); ?></h1>
        </br>
        <p class="h3"><?php the_content(); ?></p><br/>
        <p class="h6">Posted by: <b><?php the_author(); ?></b> on <?php the_time('F j, Y'); ?></p><br/><hr/>
        <h1 class="display-6">Origin Place:</h1>
        <?php 
            $originPlace = get_field('origin_place'); 

            foreach($originPlace as $places) { ?>
                <p class="h6"><a href="<?php echo get_the_permalink($places); ?>"><?php echo get_the_title($places) ?></a></p>
                <?php
            }

        ?>
    <br/><br/>
    </div>
    <br/><br/>
<?php }




get_footer();  ?>