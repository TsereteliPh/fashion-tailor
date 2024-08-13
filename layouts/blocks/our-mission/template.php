<section class="our-mission">
	<div class="container">
		<div class="our-mission__mission">наша миссия</div>

		<?php get_template_part( '/layouts/partials/title-default', null, array(
			'class' => 'our-mission__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="our-mission__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>
	</div>
</section>
