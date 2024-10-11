<?php
	$color = get_sub_field( 'color' );
	$position = get_sub_field( 'position' );
	$text = get_sub_field( 'text' );
	$bg = get_sub_field( 'bg' ) ?? false;
	$button = get_sub_field( 'button' );
	$extra = get_sub_field( 'extra' );
?>
<section class="image-text image-text--<?php echo $position; ?> image-text--<?php echo $color; ?>" style="background-image: url('<?php echo $bg['url'] ? $bg['url'] : ''; ?>');">
	<div class="container--small image-text__container">
		<div class="image-text__box">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'image-text__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( $bg['id'] ) : ?>
				<div class="image-text__img"><?php echo wp_get_attachment_image( $bg['id'], 'large', false ); ?></div>
			<?php endif; ?>

			<?php if ( $text ) : ?>
				<div class="image-text__text"><?php echo $text; ?></div>
			<?php endif; ?>

			<button class="btn image-text__btn" type="button" data-fancybox data-src="#callback"<?php echo $button == 'cunsultation' ? ' data-modal-title="Рассчитать стоимость"' : ''; ?>>
				<?php
					if ( $button == 'consultation' ) {
						echo 'Получить консультацию';
					} else {
						echo 'Рассчитать стоимость';
					}
				?>

				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
			</button>

			<?php if ( $extra ) : ?>
				<div class="image-text__extra"><?php echo $extra; ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>
