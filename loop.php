<?php ?>

<div class="mainBlogContainer clearfix">
	<h1>Blog page</h1>

	<?php while ( have_posts() ) : the_post(); ?>

	    <article class="singlePost clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- <div class="blogImage"> -->
					<?php $image = the_post_thumbnail('medium'); ?>
					<img src="<?php echo $image ?>">
				<!-- </div> -->
				<div class="entry-content">
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<p>
					<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
					</p>              
        </div>


	    </article><!-- #post-## -->

	    <?php comments_template( '', true ); ?>


	<?php endwhile; // End the loop. Whew. ?>
</div>




