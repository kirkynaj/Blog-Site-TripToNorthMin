<?php get_header(); ?>

<div class="container">
    
    <h1 class="display-4">Places</h1>
    <p class="h4">Cities and Municipalities in Northern Mindanao</p>
    </br>
    
    <div class="container">

        <?php
        while(have_posts()) {
        the_post(); ?>
        <div class="card">
            <h5 class="card-header"><?php the_title(); ?></h5>
            <div class="card-body">
                <p class="card-text"><?php the_post_thumbnail('thumbnail') ?></p>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
            </div>
        </div>
        </br>
        <?php } ?>
        <?php echo paginate_links(); ?>

    </div>
</div>

<?php get_footer(); ?>
