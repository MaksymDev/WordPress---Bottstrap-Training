<?php get_header(); ?>

 <div id="content">

    <?php if ( have_posts () ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php endwhile; else: ?>
      <!-- Display the_title and the_content here -->

    <?php _e( "Sorry! No content found", "phpforwp" ) ?>

      <!-- Display a 404 message here -->

    <?php endif; ?>

  </div>

<?php get_footer(); ?>

</body>
</html>
