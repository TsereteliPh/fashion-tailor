<?php
	$bg = get_sub_field( 'bg' );
	$reasons = get_sub_field( 'reasons' );
	$extra = get_sub_field( 'extra' );
?>

<section class="order-reasons<?php echo $extra && ! $bg ? ' order-reasons--extra' : ''; ?>" <?php echo $bg ? 'style="background-image: url(' . $bg . ');"' : ''; ?>>
	<div class="container">
		<?php if ( $reasons ) : ?>
			<div class="order-reasons__slider swiper">
				<div class="order-reasons__title-wrapper">
					<?php get_template_part( '/layouts/partials/title-default', null, array(
						'class' => 'order-reasons__title',
						'title' => get_sub_field( 'title' )
					) ); ?>

					<div class="order-reasons__title-reasons"><?php echo count( $reasons ); ?></div>
				</div>

				<ul class="reset-list order-reasons__list swiper-wrapper">
					<?php foreach ( $reasons as $reason ) : ?>
						<li class="order-reasons__item swiper-slide">
							<div class="order-reasons__item-label"><?php echo $reason['label']; ?></div>

							<div class="order-reasons__item-text"><?php echo $reason['text']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<div class="order-reasons__controls">
					<button class="btn-prev btn-prev--colored order-reasons__prev" type="button">
						<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
					</button>

					<button class="btn-next btn-next--colored order-reasons__next" type="button">
						<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
					</button>
				</div>

				<div class="pagination order-reasons__pagination"></div>
			</div>
		<?php endif; ?>

		<?php if ( $extra ) : ?>
			<div class="order-reasons__extra">
				<div class="title title--default order-reasons__extra-title"><?php echo $extra; ?></div>

				<div class="order-reasons__extra-modal">
					<div class="order-reasons__extra-text">На онлайн-встрече обсудим референсы и предоставим точную смету</div>

					<button class="btn order-reasons__extra-btn" type="button" data-fancybox data-src="#callback">
						Обсудить заказ
						<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
					</button>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
