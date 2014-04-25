<?php
/*
Template Name: Tarievenpagina
*/
?>
<?php get_header(); ?>

	<div class="Main-wrap u-gridContainer">
		<div class="Main u-gridContainer u-gridRow">
			<div class="Content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<div>
						<?php the_content(); ?>

						<h3>Prijzen losse lessen/examens</h3>
						<table>
							<tr>
								<td>Proefles</td><td>€ 30,-</td>
							</tr>
							<tr>
								<td>Losse les (60 min.)</td><td>€ 43,-</td>
							</tr>
							<tr>
								<td>Tussentijdse Toets</td><td>€ 165,-</td>
							</tr>
							<tr>
								<td>1e examen</td><td>€ 230,-</td>
							</tr>
							<tr>
								<td>herexamen</td><td>€ 220,-</td>
							</tr>
							<tr>
								<td>BNOR</td><td>€ 240,-</td>
							</tr>
							<tr>
								<td>faalangstexamen</td><td>€ 300,-</td>
							</tr>
						</table>

						<h3>Pakketprijzen</h3>
						<table>
							<tr>
								<td>10 lessen, zonder examen</td><td>€ 400,-</td>
							</tr>
							<tr>
								<td colspan="2"><strong>&darr; pakket incl. examen</strong></td>
							</tr>
							<tr>
								<td>10 lessen</td><td>€ 620,-</td>
							</tr>
							<tr>
								<td>15 lessen</td><td>€ 850,-</td>
							</tr>
							<tr>
								<td>20 lessen</td><td>€ 1045,-</td>
							</tr>
							<tr>
								<td>30 lessen</td><td>€ 1450,-</td>
							</tr>
							<tr>
								<td>35 lessen</td><td>€ 1650,-</td>
							</tr>
							<tr>
								<td>40 lessen</td><td>€ 1800,-</td>
							</tr>
							<tr>
								<td>50 lessen</td><td>€ 2170,-</td>
							</tr>
							<tr>
								<td>60 lessen</td><td>€ 2500,-</td>
							</tr>
						</table>


						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
