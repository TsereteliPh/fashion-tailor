<section class="partners">
	<div class="container--small">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) {
				echo sprintf(
					'<%1$s class="partners__title">
						<div class="partners__title-quantity">%2$s+</div>
						<div class="partners__title-text">%3$s</div>
					</%1$s>',
					$title['type'],
					$title['quantity'],
					$title['text']
				);
			}
		?>

		<?php
			$purposes = get_sub_field( 'purposes' );
			if ( $purposes ) :
				?>

				<div class="partners__slider swiper">
					<ul class="reset-list partners__list swiper-wrapper">
						<?php foreach ( $purposes as $purpose ) : ?>
							<li class="partners__item swiper-slide">
								<?php if ( $purpose['img'] ) : ?>
									<div class="partners__item-img"><?php echo wp_get_attachment_image( $purpose['img'], 'large', false ); ?></div>
								<?php endif; ?>

								<div class="partners__item-info">
									<?php if ( $purpose['purpose'] ) : ?>
										<div class="partners__item-purpose">
											Цели:
											<?php echo $purpose['purpose']; ?>
										</div>
									<?php endif; ?>

									<div class="st-left-border partners__item-left-border">
										<?php if ( $purpose['solution'] ) : ?>
											<p class="partners__item-solution">
												Решение:
												<?php echo $purpose['solution']; ?>
											</p>
										<?php endif; ?>

										<?php if ( $purpose['result'] ) : ?>
											<p class="partners__item-result">
												Результат:
												<?php echo $purpose['result']; ?>
											</p>
										<?php endif; ?>
									</div>

									<?php if ( $purpose['review'] ) : ?>
										<a href="<?php echo $purpose['review']; ?>" class="partners__item-review" data-fancybox>
											Посмотреть отзыв клиента
											<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
										</a>
									<?php endif; ?>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>

					<div class="partners__controls">
						<button class="btn-prev btn-prev--colored partners__prev" type="button">
							<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
						</button>

						<button class="btn-next btn-next--colored partners__next" type="button">
							<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
						</button>
					</div>
				</div>

				<?php
			endif;
		?>

		<?php
			$partners = get_sub_field( 'logos' );
			if ( $partners ) :
				?>

				<div class="partners__partners">
					<?php foreach ( $partners as $partner ) : ?>
						<div class="partners__logo"><?php echo wp_get_attachment_image( $partner, 'medium', false ); ?></div>
					<?php endforeach; ?>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
