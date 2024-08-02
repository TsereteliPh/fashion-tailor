<section class="logistics">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title-default', null, array(
			'class' => 'logistics__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$logistics = get_sub_field( 'logistics' );
			if ( $logistics ) :
				?>

				<div class="logistics__slider swiper">
					<ul class="reset-list logistics__list swiper-wrapper">
						<?php foreach ( $logistics as $item ) : ?>
							<li class="logistics__item swiper-slide">
								<div class="logistics__item-label"><?php echo $item['label']; ?></div>

								<div class="logistics__item-icon">
									<?php echo wp_get_attachment_image( $item['icon'], 'medium', false ); ?>
								</div>

								<div class="logistics__item-text"><?php echo $item['text']; ?></div>
							</li>
						<?php endforeach; ?>
					</ul>

					<div class="pagination logistics__pagination"></div>
				</div>

				<?php
			endif;
		?>

		<button class="btn logistics__btn" type="button" data-fancybox data-src="<?php //TODO modal ?>">
			Пройти тест
			<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
		</button>
	</div>
</section>
