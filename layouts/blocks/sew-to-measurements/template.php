<section class="sew-to-measurements">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'sew-to-measurements__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="sew-to-measurements__text">
				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
				<?php the_sub_field( 'text' ); ?>
			</div>
		<?php endif; ?>

		<?php
			$advantages = get_sub_field( 'advantages' );
			if ( $advantages ) :
				?>

				<div class="sew-to-measurements__box">
					<ul class="reset-list sew-to-measurements__list">
						<?php foreach ( $advantages as $advantage ) : ?>
							<li class="sew-to-measurements__item">
								<div class="sew-to-measurements__item-icon">
									<?php echo wp_get_attachment_image( $advantage['icon'], 'medium', false ); ?>
								</div>

								<div class="sew-to-measurements__item-label"><?php echo $advantage['label']; ?></div>

								<div class="sew-to-measurements__item-text"><?php echo $advantage['text']; ?></div>
							</li>
						<?php endforeach; ?>
					</ul>

					<?php if ( get_sub_field( 'catalog' ) ) : ?>
						<a href="<?php the_sub_field( 'catalog' ); ?>" class="btn sew-to-measurements__download" download>
							Скачать весь каталог
							<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
						</a>
					<?php endif; ?>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
