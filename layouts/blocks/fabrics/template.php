<section class="fabrics">
	<div class="container--small fabrics__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'fabrics__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="fabrics__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$fabrics = get_sub_field( 'fabrics' );
			$upper_text = get_sub_field( 'upper-text' );
			$bottom_text = get_sub_field( 'bottom-text' );
		?>
		<div class="fabrics__box">
			<div class="fabrics__first-column">
				<?php if ( $upper_text ) : ?>
					<div class="fabrics__upper-text"><?php echo $upper_text; ?></div>
				<?php endif; ?>

				<?php if ( $fabrics ) : ?>
					<ul class="reset-list fabrics__list">
						<?php foreach ( array_slice( $fabrics, 0, 3 ) as $fabric ) : ?>
							<li class="fabrics__item">
								<div class="fabrics__item-img"><?php echo wp_get_attachment_image( $fabric['img'], 'medium', false ); ?></div>

								<?php if ( $fabric['label'] ) : ?>
									<div class="fabrics__item-label"><?php echo $fabric['label']; ?></div>
								<?php endif; ?>

								<?php if ( $fabric['text'] ) : ?>
									<div class="fabrics__item-text"><?php echo $fabric['text']; ?></div>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<?php if ( $bottom_text ) : ?>
					<div class="fabrics__bottom-text"><?php echo $bottom_text; ?></div>
				<?php endif; ?>
			</div>

			<div class="fabrics__second-column"></div>

			<div class="fabrics__third-column">
				<?php if ( $fabrics ) : ?>
					<ul class="reset-list fabrics__list">
						<?php foreach ( array_slice( $fabrics, 3 ) as $fabric ) : ?>
							<li class="fabrics__item">
								<div class="fabrics__item-img"><?php echo wp_get_attachment_image( $fabric['img'] ? $fabric['img'] : 30, 'medium', false ); ?></div>

								<?php if ( $fabric['label'] ) : ?>
									<div class="fabrics__item-label"><?php echo $fabric['label']; ?></div>
								<?php endif; ?>

								<?php if ( $fabric['text'] ) : ?>
									<div class="fabrics__item-text"><?php echo $fabric['text']; ?></div>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<?php if ( $bottom_text ) : ?>
					<div class="fabrics__bottom-text fabrics__bottom-text--mobile"><?php echo $bottom_text; ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php
		$prints = get_sub_field( 'prints' );
		if ( $prints ) :
			?>

			<div class="container fabrics__slider swiper">
				<ul class="reset-list fabrics__prints swiper-wrapper">
					<?php foreach ( $prints as $print ) : ?>
						<li class="fabrics__print swiper-slide">
							<div class="fabrics__print-img"><?php echo wp_get_attachment_image( $print['img'] ? $print['img'] : 30, 'medium', false ); ?></div>

							<div class="fabrics__print-text"><?php echo $print['text']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<?php
		endif;
	?>
</section>
