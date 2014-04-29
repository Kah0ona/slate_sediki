<?php
/*
Template Name: App pagina
*/
?>
<?php get_header(); ?>
	<div class="Main-row">
		<div class="Main-wrap u-gridContainer">
			<div class="Main u-gridContainer u-gridRow">
				<div class="Content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<aside class="u-gridColumn4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone-sediki.png" class="App-iphone" />
					</aside>
					<article class="Content-article u-gridColumn8" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>

				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
