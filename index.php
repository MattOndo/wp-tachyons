<?php get_header(); ?>
    <main id="content" class="w-100">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>