<section class="top-models">
	<div class="container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) {
				echo sprintf(
					'<div class="top-models__title">
						<div class="top-models__title-before">%2$s</div>

						<%1$s class="title top-models__title-text">%3$s</%1$s>
					</div>',
					$title['type'],
					$title['before'],
					$title['text']
				);
			}
		?>

		<?php
			$models = get_sub_field( 'models' );
			if ( $models ) :
				?>

				<div class="top-models__box">
					<ul class="reset-list top-models__tabs js-tabs">
						<?php foreach ( $models as $key => $model ) :?>
                            <li class="top-models__tab<?php echo $key == 0 ? ' active' : ''; ?>" data-tab="model-<?php echo $key + 1; ?>"><?php echo $model['cat']; ?></li>
                        <?php endforeach;?>
                    </ul>

					<div class="top-models__content">
						<?php foreach ( $models as $key => $model ) :?>
                            <div class="top-models__gallery<?php echo $key == 0 ? ' active' : ''; ?>" id="model-<?php echo $key + 1; ?>">
								<?php foreach ( $model['gallery'] as $link_key => $photo ) : ?>
									<a href="<?php echo $photo['url']; ?>" class="top-models__link<?php echo $link_key > 2 ? ' hidden' : ''; ?>" data-fancybox="model-gallery-<?php echo $key + 1; ?>">
										<?php echo wp_get_attachment_image( $photo['id'], 'large', false ); ?>
									</a>
								<?php endforeach; ?>
							</div>
                        <?php endforeach;?>
					</div>
				</div>

				<?php
			endif;
		?>

		<button class="btn top-models__btn" type="button" data-fancybox data-src="#callback">
			Хочу так же
			<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
		</button>
	</div>
</section>
