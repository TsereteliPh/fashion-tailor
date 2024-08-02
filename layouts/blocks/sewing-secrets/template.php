<section class="sewing-secrets">
	<div class="container sewing-secrets__container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) {
				echo sprintf(
					'<%1$s class="title sewing-secrets__title">
						<div class="sewing-secrets__title-text">%2$s</div>
						<span>%3$s</span>
					</%1$s>',
					$title['type'],
					$title['text'],
					$title['indent']
				);
			}
		?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="sewing-secrets__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$solutions = get_sub_field( 'solutions' );
			if ( $solutions ) :
				?>

				<ul class="reset-list sewing-secrets__list">
					<?php foreach ( $solutions as $solution ) : ?>
						<li class="sewing-secrets__item">
							<div class="sewing-secrets__item-icon"><?php echo wp_get_attachment_image( $solution['icon'], 'medium', false ); ?></div>

							<div class="sewing-secrets__item-text"><?php echo $solution['text']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>

		<?php if ( get_sub_field( 'extra' ) ) : ?>
			<div class="sewing-secrets__extra"><?php the_sub_field( 'extra' ); ?></div>
		<?php endif; ?>

		<button class="btn sewing-secrets__btn" type="button" data-fancybox data-src="<?php //TODO modal ?>">
			Получить консультацию
			<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
		</button>
	</div>
</section>
