<?php get_header(); ?>

<div class="section">

	<div class="portfolioTestContainer clearfix">
		<h1>Portfolio Section</h1>

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			  <div class="col-1-2">
					<div class="imageWrapper">
						<?php //the_post_thumbnail('medium'); ?>

						<?php while( has_sub_field('images') ): ?>
						  <?php $image = get_sub_field('image'); ?>
						  <!-- <pre><?php print_r($image);?></pre> -->
						  <img src="<?php echo $image['sizes']['large'] ?>">
						<?php endwhile; ?>
					</div>

					<div class="captionDetails">
						<h2 class="entry-title"><?php the_field('item_name'); ?></h2>
						<p><?php the_field('short_description'); ?></p>
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>"></a>
					</div>
			  </div>
			<?php endwhile; // end of the loop. ?>		  		
		
	</div>



	<!-- Testing the hover border effect -->
<!-- 	<figure class="effect-bubba">
		<img src="images/Toronto1.jpg"/>
		<figcaption>
			<h2>Fresh <span>Bubba</span></h2>
			<p>Bubba likes to appear out of thin air.</p>
			<a href="#">View more</a>
		</figcaption>			
	</figure> -->



	<!-- old background hover animatino -->
<!--    <div class="sectionContainer clearfix">
  		<h1>Portfolio Section</h1>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="col-1-2">

           <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>">
             <div class="imageWrapper">
               <div class="imageHover">
               </div>
               <?php  ?>

               <?php while( has_sub_field('images') ): ?>
                 <?php $image = get_sub_field('image'); ?>
                 <img src="<?php echo $image['sizes']['large'] ?>">
               <?php endwhile; ?>
             </div>
           </a>

           <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_field('item_name'); ?></a></h2>

           <p><?php the_field('short_description'); ?></p>

         </div>
      <?php endwhile; ?>
  </div> 
 -->
	 


</div> <!-- /.section -->

<?php get_footer(); ?>