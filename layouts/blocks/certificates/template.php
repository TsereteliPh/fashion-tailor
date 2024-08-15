<section class="certificates">
	<div class="container certificates__container">
		<?php get_template_part( '/layouts/partials/title-default', null, array(
			'class' => 'certificates__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<div class="certificates__wrapper">
			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="certificates__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<?php
				$certificates = get_sub_field( 'gallery' );
				if ( $certificates ) :
					?>

					<div class="certificates__slider swiper">
						<div class="certificates__gallery swiper-wrapper">
							<?php foreach ( $certificates as $certificate ) : ?>
								<a href="<?php echo $certificate['url']; ?>" class="certificates__link swiper-slide" data-fancybox="certificates-gallry-<?php echo $args['block_id']; ?>">
									<?php echo wp_get_attachment_image( $certificate['id'], 'large', false ); ?>
								</a>
							<?php endforeach; ?>
						</div>

						<div class="certificates__controls">
							<button class="btn-prev certificates__prev" type="button">
								<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
							</button>

							<button class="btn-next certificates__next" type="button">
								<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
							</button>
						</div>
					</div>

					<?php
				endif;
			?>
		</div>
	</div>
</section>
