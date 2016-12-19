<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="banner">
			<div class="small-container">
				<div class="opener">
					<h1>Tania Rascia</h1>
					<a class="github-button" href="https://github.com/taniarascia" data-count-href="/taniarascia/followers" data-count-api="/users/taniarascia#followers" data-count-aria-label="# followers on GitHub" aria-label="Follow @taniarascia on GitHub">taniarascia</a>
					<a class="twitter-follow-button" href="https://twitter.com/taniarascia" data-show-screen-name="false">Follow @taniarascia</a>
					<div class="the-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>

		<?php endwhile; endif; ?>

			<section class="content">
				<div class="small-container">
					<h2 class="large-heading">Tutorials</h2>
					<p>The missing instruction manuals for popular web services.</p>
					<a class="button" href="<?php echo site_url(); ?>/blog">View All</a>
				</div>
			</section>

			<section class="tutorials">
				<div class="tutorials-grid">
					<a href="<?php echo site_url(); ?>/developing-a-wordpress-theme-from-scratch/" id="wordpress-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/wptut.png" class="responsive-image" alt="WordPress">
		<h3>WordPress</h3>
	</a>
					<a href="<?php echo site_url(); ?>/what-is-bootstrap-and-how-do-i-use-it/" id="bootstrap-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/bootstrap.png" class="responsive-image" alt="Bootstrap">
		<h3>Bootstrap</h3>
	</a>
					<a href="<?php echo site_url(); ?>/learn-sass-now/" id="sass-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/sass-150x150.png" class="responsive-image" alt="Sass">
		<h3>Sass</h3>
	</a>
					<a href="<?php echo site_url(); ?>/getting-started-with-gulp/" id="gulp-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/gulptut.png" class="responsive-image" alt="Gulp">
		<h3>Gulp</h3>
	</a>
					<a href="<?php echo site_url(); ?>/make-a-static-website-with-jekyll/" id="jekyll-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/jekylltut.png" class="responsive-image" alt="Jekyll">
		<h3>Jekyll</h3>
	</a>
					<a href="<?php echo site_url(); ?>/getting-started-with-git/" id="git-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/gittut.png" class="responsive-image" alt="Git">
		<h3>Git</h3>
	</a>
					<a href="<?php echo site_url(); ?>/getting-started-with-aws-setting-up-a-virtual-server/" id="aws-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/awstut.png" class="responsive-image" alt="AWS">
		<h3>Amazon Web Services</h3>
	</a>
					<a href="<?php echo site_url(); ?>/local-environment/" id="apache-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/apache.png" class="responsive-image" alt="Apache">
		<h3>Apache</h3>
	</a>
					<a href="<?php echo site_url(); ?>/getting-started-with-grunt-and-sass/" id="grunt-tutorial" class="tutorials-cell">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/grunt-150x150.png" class="responsive-image" alt="Grunt">
		<h3>Grunt</h3>
	</a>
				</div>
			</section>

<?php get_footer(); ?>