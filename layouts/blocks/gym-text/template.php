<section class="gym-text">
	<div class="container">
		<div class="gym-text__box">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'gym-text__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="gym-text__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<button class="btn gym-text__btn" type="button" data-fancybox data-src="<?php //TODO modal ?>">
				Получить консультацию
				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
			</button>
		</div>
	</div>
</section>
