<?php get_header(); ?>

<div class="container">
    
    <h1 class="display-4">Welcome to the Archives!</h1>
    <p class="h4">Keep up with our latest news</p>
    <div class="container">
        
        <?php
        while(have_posts()) {
        the_post(); ?>
        <div class="card">
            <h5 class="card-header"><?php the_title(); ?></h5>
            <div class="card-body">
                <h5 class="card-title">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></h5>
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
