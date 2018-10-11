<?php get_header(); ?>

 <div id="content">

     <!-- Add any post tags outside of loop -->

     <?php if ( have_posts () ) : while ( have_posts() ) : the_post(); ?>

     <!-- Add any post template tags inside of loop -->
     <article>
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
         <?php the_content(); ?>

         <footer>
             <p class="byline">
                 Author:
                 <a href="<?php echo get_author_posts_url( $post->post_author ); ?>">
                 <?php the_author(); ?>
                 </a> |
                 Date:
                 <?php the_time( 'M. j, Y' ); ?> |
                 Categories:
                 <?php the_category( ',' ); ?> |
                 Tags:
                 <?php the_tags( '', ',', '' ); ?>
             </p>

         </footer>

     </article>

    <?php endwhile; else: ?>
      <!-- Display the_title and the_content here -->

     <h2><?php esc_html_e( '404 Error', 'phpforwp'); ?></h2>
     <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

      <!-- Display a 404 message here -->

    <?php endif; ?>

  </div>

<?php get_footer(); ?>

</body>
</html>
