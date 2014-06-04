<?php
/*
Template Name: Contactpagina
*/
?>
<?php get_header(); ?>

	<div class="Main-wrap u-gridContainer">
		<div class="Main u-gridContainer u-gridRow">
			<div class="Content u-gridColumn6">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>
			<aside class="u-gridColumn6">
				<h2>Waar Sediki werkt</h2>
				<p> Sediki hanteert als werkgebied: Gouda, Reeuwijk, Waddinxveen, Boskoop, Bodegraven, Haastrecht, Stolwijk, Gouderak, Nieuwerkerk aan den IJssel, Capelle aan den IJssel, Oudewater, Bergambacht, Woerden, Schoonhoven, Moerkappele, Moordrecht, Zevenhuizen, Zoetermeer, Alphen aan den Rijn.
				</p>
				<div id="map_canvas"></div>
			</aside>
		</div>
	</div>

<?php get_footer(); ?>
