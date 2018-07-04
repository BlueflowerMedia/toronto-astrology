<?php get_header(); ?>
<!-- Uncategorized posts loop begins here -->
<div class="container-post">
  <?php $uncategorizedPosts = new WP_Query('cat=1&posts_per_page=3'); ?>
    <?php if ($uncategorizedPosts->have_posts()) :
    while ($uncategorizedPosts->have_posts()) : $uncategorizedPosts->the_post(); ?>
    <!-- output Content -->
      <div class="post">
        <div class="post-image">
        <?php the_post_thumbnail(); ?>
        </div>
        <div class="post-info">
            <a href="<?php the_permalink(); ?>" title="Read">
            <h2><?php the_title(); ?></h2></a>
            <?php the_time('M j, Y'); ?>
            <?php the_excerpt(); ?>
            <a href="<?php echo get_permalink(); ?>" class="read-more"> Read More
              <span class="arrow"><i class="fas fa-angle-double-right"></i></span>
            </a>
          </div>
      </div>
    <?php endwhile;
    else :
      // <!-- no Content -->
      echo '<p>No content found</p>';
    endif;
    wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>
