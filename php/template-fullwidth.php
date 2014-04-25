<?php
/*
Template Name: Page w/o sidebar 
*/
?>
<?php get_header(); ?>
	<div class="Main-row">
		<div class="Main-wrap u-gridContainer">
			<div class="Main u-gridContainer u-gridRow">
				<div class="Content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content-article" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
					<section class="Comments">
					<?php if(is_page('gastenboek') || is_page('referenties')) { comments_template(); } ?> 
					</section>

				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
