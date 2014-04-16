<?php
/*
Template Name: Homepage
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
			<aside class="Usp u-gridColumn6">
				<h2>Waarom Rijschool Sediki</h2>
				<ul>
					<li>Hoge kwaliteit en betrouwbaarheid</li>
					<li>Rijden in nieuwe VW</li>
					<li>Vaste instructeur</li>
					<li>Hoog slagingspercentage</li>
					<li>Scherpe lestarieven en pakketten</li>
					<li>Altijd vervanger bij ziekte</li>
					<li>Les eventueel ook 's avonds of in het weekend</li>
					<li>Ook faalangstinstructeur</li>
				</ul>
			</aside>
		</div>
	</div>

<?php get_footer(); ?>