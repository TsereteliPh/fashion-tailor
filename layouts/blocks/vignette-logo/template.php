<?php $bg = get_sub_field( 'bg' ); ?>
<section class="vignette-logo" <?php echo $bg ? 'style="background-image: url(' . $bg . ');"' : ''; ?>>
	<div class="vignette-logo__logo">
		<svg width="527" height="756"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-logo"></use></svg>
	</div>

	<div class="container--small vignette-logo__container">
		<div class="vignette-logo__box">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'vignette-logo__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="vignette-logo__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>
