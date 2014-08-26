<?php get_header(); ?>




<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
			<p><?php the_field('long_description'); ?></p>
			<?php //$projectURL = the_field('project_url');?>
			<a href="<?php the_field('project_url'); ?>"  target="_blank"><div class="goToLiveProject">See it Live</div></a>
			
			
			<div class="images">
			  <?php while( has_sub_field('images') ): ?>
			    <?php $image = get_sub_field('image'); ?>
			    <!-- <pre><?php print_r($image);?></pre> -->
			    <img src="<?php echo $image['sizes']['large'] ?>">
			  <?php endwhile; ?>
			</di m v>
      <?php endwhile; // end of the loop. ?>	
    </div>

    <div class="tech">
			<p>	This project was built using the following technologies:</p>

			<?php  $terms = get_terms("technologies");
			if ( !empty( $terms ) && !is_wp_error( $terms ) ){
			    echo "<ul>";
			    foreach ( $terms as $term ) {
			      echo "<li>" . $term->name . ""; 
			      if(end($terms) !== $term){
    				echo "  <span>|</span>  </li>"; // not the last element
					}
			       
			    }
			    echo "</ul>";
			}
			?>
			

			<!-- Displays taxonomies with links. Commented out for now -->
			<?php //the_terms($post->ID, 'technologies' ); ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>