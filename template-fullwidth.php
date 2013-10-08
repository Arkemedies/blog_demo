<?php
/*
Template Name: Fullwidth Template
*/
?>
<?php get_header(); ?>

	<div id="wrap" class="template-fullwidth">
		
		<section id="content" class="fullwidth" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div <?php post_class(); ?>>
				
				<h2 class="page-title"><?php the_title(); ?></h2>
				<?php edit_post_link(__( 'Edit', 'zeeNoble_language' )); ?>
				
				<div class="entry clearfix">
					<?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
					<?php the_content(); ?>
				</div>
				<?php wp_link_pages(); ?>
				
			</div>

		<?php endwhile; ?>

		<?php endif; ?>
		
		</section>

	</div>
	
<?php get_footer(); ?>	