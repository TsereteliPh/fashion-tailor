<?php
	$content = get_sub_field( 'content' );
	$text = get_sub_field( 'text' );
	$button = get_sub_field( 'button' );
	$icon_text = get_sub_field( 'icon-text' );
?>
<section class="consultation consultation--<?php echo $content; ?>">
	<div class="container--small consultation__container">
		<div class="consultation__svg">
			<svg width="1531" height="175"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-consultation"></use></svg>
		</div>

		<div class="consultation__box consultation__box--<?php echo $content; ?>">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'consultation__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( $text ) : ?>
				<div class="consultation__text"><?php echo $text; ?></div>
			<?php endif; ?>

			<?php if ( $button['type'] == 'consultation' ) : ?>
				<button class="btn consultation__btn" type="button" data-fancybox data-src="#callback">
					<?php echo $button['text']; ?>

					<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
				</button>
			<?php else : ?>
				<a href="<?php echo $button['link']; ?>" class="btn consultation__link">
					<?php echo $button['text']; ?>

					<svg class="consultation__link-icon" width="37" height="37"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-whatsapp--full"></use></svg>

					<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
				</a>
			<?php endif; ?>

			<?php if ( $icon_text ) : ?>
				<div class="consultation__icon-text">
					<svg width="50" height="54"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-finger"></use></svg>
					<?php echo $icon_text; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
