<section class="own-workshop">
	<div class="container--small">
		<div class="own-workshop__box">
			<?php
				$title = get_sub_field( 'title' );
				if ( $title ) {
					echo sprintf(
						'<%1$s class="title own-workshop__title">%2$s</%1$s>',
						$title['type'],
						$title['text']
					);
				}
			?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="own-workshop__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<?php
				$img = get_sub_field( 'img' );
				if ( $img ) :
					?>

					<div class="own-workshop__img"><?php echo wp_get_attachment_image( $img, 'full', false ); ?></div>

					<?php
				endif;
			?>

			<?php if ( get_sub_field( 'extra' ) ) : ?>
				<div class="own-workshop__extra"><?php the_sub_field( 'extra' ); ?></div>
			<?php endif; ?>

			<?php
				$socials = get_sub_field( 'socials' );
				if ( $socials ) :
					?>

					<div class="own-workshop__socials-wrapper">
						<div class="own-workshop__socials-label">Мы в соцсетях</div>

						<div class="own-workshop__socials">
							<?php foreach ( $socials as $social ) : ?>
								<a href="<?php echo $social['link']; ?>" class="own-workshop__social" aria-label="Ссылка на соцсеть <?php echo $social['label']; ?>">
									<?php echo wp_get_attachment_image( $social['icon'], 'thumbnail', false ); ?>
								</a>
							<?php endforeach; ?>
						</div>
					</div>

					<?php
				endif;
			?>
		</div>
	</div>
</section>
