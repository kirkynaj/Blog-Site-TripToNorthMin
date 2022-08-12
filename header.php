<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo site_url(); ?>">Trip to NorthMin</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a <?php if(is_page('about-northern-mindanao')) {
                      echo 'class="nav-link active"'; }else{ echo 'class="nav-link"'; } ?>
                       href="<?php echo site_url('/about-northern-mindanao'); ?>">About</a>
                  </li>
                  <li class="nav-item">
                  <a <?php if(is_page('events')) {
                      echo 'class="nav-link active"'; }else{ echo 'class="nav-link"'; } ?>
                       href="<?php echo site_url('/events'); ?>">Events</a>
                  </li>
                  <li class="nav-item">
                  <a <?php if(get_post_type() == 'adventures') {
                      echo 'class="nav-link active"'; }else{ echo 'class="nav-link"'; } ?>
                       href="<?php echo site_url('/category/adventures'); ?>">Adventures</a>
                  </li>
                  <li class="nav-item">
                  <a <?php if(get_post_type() == 'tourist-spots') {
                      echo 'class="nav-link active"'; }else{ echo 'class="nav-link"'; } ?>
                       href="<?php echo site_url('/category/tourist-spots'); ?>">Tourist Spots</a>
                  </li>
                  <li class="nav-item">
                  <a <?php if(get_post_type() == 'local-shops') {
                      echo 'class="nav-link active"'; }else{ echo 'class="nav-link"'; } ?>
                       href="<?php echo site_url('/category/local-shops'); ?>">Local Shops</a>
                  </li>
                  <li class="nav-item">
                  <a <?php if(get_post_type() == 'restaurants') {
                      echo 'class="nav-link active"'; }else{ echo 'class="nav-link"'; } ?>
                       href="<?php echo site_url('/category/restaurants'); ?>">Restaurants</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Places</a>
                  </li>
                  <li class="nav-item">
                    <a <?php if(get_post_type() == 'post') {
                      echo 'class="nav-link active"'; }else{ echo 'class="nav-link"'; } ?>
                       href="<?php echo site_url('/blog'); ?>">Archives</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Search</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
