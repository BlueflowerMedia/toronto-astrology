<?php get_header(); ?>

<?php $query = new WP_Query(" "); ?>

<section id="section-blog">
  <div class="container">
    <div class="posts">
      <?php if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
        <div class="post">
          <div class="post-image">
            <?php the_post_thumbnail(); ?>
            <div class="post-info">
              <a href="<?php the_permalink(); ?>" title="Read"><h2><?php the_title(); ?></h2></a>
              <?php the_time('M j, Y'); ?>
              <?php the_excerpt(); ?>
              <a href="<?php echo get_permalink(); ?>" class="read-more"> Read More
                <span class="arrow">
                  <!-- <svg height="15px" width="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"/></svg> -->
                  <i class="fas fa-angle-double-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      <?php endwhile; else: ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>



<?php get_footer(); ?>
