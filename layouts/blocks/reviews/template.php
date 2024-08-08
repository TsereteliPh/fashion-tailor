<section class="reviews">
	<div class="container--small">
		<?php
			get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'reviews__title',
				'title' => get_sub_field( 'title' )
			) );

			$reviews_group = get_sub_field( 'reviews-group' );
			if ( $reviews_group ) :
				?>

				<ul class="reset-list reviews__tabs js-tabs">
					<?php foreach ( $reviews_group as $key => $reviews ) : ?>
						<li class="reviews__tab<?php echo $key == 0 ? ' active' : ''; ?>" data-tab="<?php echo $reviews['tax']->slug ?>"><?php echo $reviews['tax']->name; ?></li>
					<?php endforeach; ?>
				</ul>

				<div class="reviews__content">
					<?php foreach ( $reviews_group as $key => $reviews ) : ?>
						<div class="swiper reviews__slider<?php echo $key == 0 ? ' active' : ''; ?>" id="<?php echo $reviews['tax']->slug; ?>">
							<ul class="reset-list swiper-wrapper reviews__list">
								<?php
									foreach ( $reviews['reviews'] as $post ) {
										get_template_part('layouts/partials/cards/review-card', null, array(
											'class' => 'reviews__item swiper-slide'
										));
									}

									wp_reset_postdata();
								?>
							</ul>

							<div class="reviews__controls">
								<button class="btn-prev reviews__prev" type="button">
									<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
								</button>

								<button class="btn-next reviews__next" type="button">
									<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
								</button>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<?php
			endif;
		?>
	</div>
</section>
