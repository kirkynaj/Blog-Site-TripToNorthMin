<?php get_header(); ?>

    <section> <!-- Explore Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="<?php echo site_url('/about-northern-mindanao'); ?>"><img src="<?php echo get_theme_file_uri('/images/Hilltop Garden Hub 1.jpg') ?>" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Learn more about NorthMin</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="<?php echo site_url('/category/adventures') ?>"><img src="<?php echo get_theme_file_uri('/images/80 degrees ktv 2.jpg') ?>" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Explore more adventures</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="<?php echo site_url('/category/restaurants') ?>"><img src="<?php echo get_theme_file_uri('/images/80 degrees ktv 3.jpg') ?>" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Dine in to your favorite dishes</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section> <!-- Event Cards -->
      <br/>
      <div class="headtitle"><h1 class="display-4">Current Events</h1></div>
      <div class="container" id="cards">
      <?php 
      $today = date('Ymd');
      $eventCards = new WP_Query(array(
        'post_per_page' => 3,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
          array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      ));

      while($eventCards->have_posts()) {
        $eventCards->the_post(); ?>
        
        <div class="card" style="width: 18rem;">
          <img src="<?php the_post_thumbnail( 'medium' ) ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <h5 class="card-title">⏰ <?php 
              $eventDate = new DateTime(get_field('event_date'));
              echo $eventDate->format('M d Y') ?></h5>
            <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-success">View...</a>
          </div>
        </div> 
      <?php }
      ?>
      </div> 
    </section>

<?php get_footer(); ?>