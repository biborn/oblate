<?php get_header(); ?>

<section class="content">
	<section class="page-body">
		<header class="page-header">
			<h1><?php the_title(); ?></h1>
		</header>
		<section class="article-preview-section">

			<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '-1',
				'category_name' => 'Thoughts',
			);

			$thoughts = new WP_Query( $args );

			if ( $thoughts->have_posts() ) :  while ( $thoughts->have_posts() ) : $thoughts->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>
		</section>
	</section>
</section>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); 