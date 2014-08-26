<?php ?>

<div class="mainBlogContainer clearfix">
	<h1>Blog page</h1>

	      <?php
	      $projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 
	      $projectQuery = new WP_Query( 
	        array( 
	          'posts_per_page' => 4, 
	          'post_type' => 'post', 
	          'project_type' => $projectTerms, 
	          'post__not_in' => array( $post->ID )  
	          ) 
	      ); ?>

	      <?php if ( $projectQuery->have_posts() ) : ?>

	        <?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>

	          <div class="col-1-4">
	<!--               <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"></a> -->
	              
	                <div class="entryContentBackground">
	                  <div class="entry-content">
	                    <?php $image = the_post_thumbnail('medium'); ?>
	                    <img src="<?php echo $image ?>">

	                    <h2 class="entry-title"><?php the_title(); ?></h2>
	                    <p>
	                      <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
	                    </p>
	                  </div>
	                </div>
	              
	          </div>
	           
	        <?php endwhile; ?>
	        
	        <?php wp_reset_postdata(); ?>

	      <?php endif; ?>





	<!-- Starting work on new blog post layout -->
<!-- 	<?php while ( have_posts() ) : the_post(); ?>

	    <article class="singlePost clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php $image = the_post_thumbnail('medium'); ?>
					<img src="<?php echo $image ?>">

				<div class="entry-content">
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<p>
					<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
					</p>              
        </div>


	    </article>

	    <?php //comments_template( '', true ); ?>


	<?php endwhile; // End the loop. Whew. ?>

	 -->
</div>




