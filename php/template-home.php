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
				<span style="margin-top: 20px;display: block; background-color: #3bc60b; color: #fff; font-weight: bold; text-align: center; padding: 20px; border-radius: 6px;">
					ACTIE! Tijdelijk werken wij met verlaagde tarieven, en een gratis proefles!
				</span>
			
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
				<div class="Usp-references">
					<h3>Wat anderen zeggen over ons</h3>
					<p>Lees <a href="/referenties">wat anderen zeggen</a> over Rijschool Sediki!</p>
				</div>
			</aside>

			
		</div>
	</div>

<?php get_footer(); ?>
