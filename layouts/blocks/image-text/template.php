<?php
	$color = get_sub_field( 'color' );
	$position = get_sub_field( 'position' );
	$text = get_sub_field( 'text' );
	$bg = get_sub_field( 'bg' ) ?? false;
	$button = get_sub_field( 'button' );
?>
<section class="image-text" style="background-image: url('<?php echo $bg ? $bg : ''; ?>');">
	<div class="container--small image-text__container">
		<div class="image-text__box image-text__box--<?php echo $position; ?> image-text__box--<?php echo $color; ?>">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'image-text__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( $text ) : ?>
				<div class="image-text__text"><?php echo $text; ?></div>
			<?php endif; ?>

			<button class="btn image-text__btn" type="button" data-fancybox data-src="<?php //TODO modal ?>">
				<?php
					if ( $button == 'consultation' ) {
						echo 'Получить консультацию';
					} else {
						echo 'Рассчитать стоимость';
					}
				?>

				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
			</button>
		</div>
	</div>
</section>
