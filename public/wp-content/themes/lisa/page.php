<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1 class="entry-title"><?php the_title(); ?></h1>

	<div class="content">
		<?php the_content(); ?>
	</diva><!-- .entry-content -->
</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>
