<section class="discussion-banner js-banner">
	<div class="container discussion-banner__container">
		<?php if ( get_sub_field( 'bg' ) ) : ?>
			<div class="discussion-banner__img"><?php echo wp_get_attachment_image( get_sub_field( 'bg' ), 'large', false ); ?></div>
		<?php endif; ?>

		<div class="discussion-banner__box">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'discussion-banner__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="discussion-banner__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<button class="btn discussion-banner__btn" type="button" data-fancybox data-src="#callback">
				Обсудить заказ
				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
			</button>
		</div>
	</div>
</section>
