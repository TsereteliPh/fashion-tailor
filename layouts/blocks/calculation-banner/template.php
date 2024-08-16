<section class="calculation-banner js-banner">
	<?php if ( get_sub_field( 'img' ) ) : ?>
		<div class="calculation-banner__img"><?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'large', false ); ?></div>
	<?php endif; ?>

	<div class="container calculation-banner__container">
		<?php get_template_part( '/layouts/partials/title-default', null, array(
			'class' => 'calculation-banner__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<div class="calculation-banner__box">
			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="calculation-banner__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<?php if ( get_sub_field( 'icon-text' ) ) : ?>
				<div class="calculation-banner__icon-text">
					<svg width="50" height="50"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-notepad"></use></svg>

					<?php the_sub_field( 'icon-text' ); ?>
				</div>
			<?php endif; ?>

			<button class="btn calculation-banner__btn" type="button" data-fancybox data-src="<?php //TODO modal ?>">
				Загрузить фото
				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
			</button>
		</div>
	</div>
</section>
