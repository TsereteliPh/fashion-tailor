<section class="gallery-slider">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'gallery-slider__gallery-slider',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="gallery-slider__text">
				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
				<?php the_sub_field( 'text' ); ?>
			</div>
		<?php endif; ?>

		<?php
			$gallery = get_sub_field( 'gallery' );
			if ( $gallery ) :
				?>

				<div class="gallery-slider__slider swiper">
					<div class="reset-list gallery-slider__gallery swiper-wrapper">
						<?php foreach ( $gallery as $photo ) : ?>
							<a href="<?php echo $photo['url']; ?>" class="gallery-slider__link swiper-slide" data-fancybox="gallery-<?php echo $args['block_id']; ?>">
								<?php echo wp_get_attachment_image( $photo['id'], 'large', false ); ?>
							</a>
						<?php endforeach; ?>
					</div>

					<div class="gallery-slider__controls">
						<button class="btn-prev gallery-slider__prev" type="button">
							<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
						</button>

						<button class="btn-next gallery-slider__next" type="button">
							<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
						</button>
					</div>

					<div class="pagination gallery-slider__pagination"></div>
				</div>

				<?php
			endif;
		?>

		<button class="btn gallery-slider__btn" type="button" data-fancybox data-src="#callback">
			Связаться с портным
			<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
		</button>
	</div>
</section>
