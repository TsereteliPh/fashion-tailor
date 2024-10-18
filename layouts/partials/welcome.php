<?php
	$welcome = get_field( 'welcome' );
	if ( $welcome ) :
		?>

		<section class="welcome" <?php echo $welcome['bg'] ? ' style="background-image: url(' . $welcome['bg'] . ');"' : ''; ?>>
			<div class="container">
				<div class="welcome__box<?php echo ' welcome__box--' . $welcome['color']; ?>">
					<?php if ( $welcome['title'] ) : ?>
						<h1 class="welcome__title"><?php echo $welcome['title']; ?></h1>
					<?php endif; ?>

					<?php if ( $welcome['text'] ) : ?>
						<div class="welcome__text"><?php echo $welcome['text']; ?></div>
					<?php endif; ?>

					<?php if ( $welcome['button'] == 'modal' ) : ?>
						<button class="btn welcome__btn" type="button" data-fancybox data-src="#callback" data-modal-title="Рассчитать цену">
							Рассчитать цену
							<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
						</button>
					<?php else : ?>
						<div data-marquiz-id="66f51a9317e23800269413f3"></div>
					<?php endif; ?>
				</div>
			</div>

			<div class="welcome__mobile-box">
				<?php if ( $welcome['mobile-bg'] ) : ?>
					<div class="welcome__mobile-bg">
						<?php echo wp_get_attachment_image( $welcome['mobile-bg'], 'large', false ); ?>
					</div>
				<?php endif; ?>

				<button class="btn welcome__mobile-btn" type="button" data-fancybox data-src="#callback" data-modal-title="Рассчитать цену">
					Рассчитать цену
					<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
				</button>
			</div>

			<?php if ( $welcome['advantages'] ) : ?>
				<div class="welcome__advantages swiper">
					<ul class="reset-list welcome__list swiper-wrapper">
						<?php foreach ( $welcome['advantages'] as $advantage ) : ?>
							<li class="welcome__item swiper-slide">
									<div class="welcome__item-img">
										<?php echo wp_get_attachment_image( $advantage['icon'], 'medium', false ); ?>
									</div>

									<div class="welcome__item-text"><?php echo $advantage['text']; ?></div>
							</li>
						<?php endforeach;?>
					</ul>
				</div>
			<?php endif; ?>
		</section>

		<?php
	endif;
?>
