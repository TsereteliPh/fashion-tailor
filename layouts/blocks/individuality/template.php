<section class="individuality">
	<div class="container individuality__container">
		<svg class="individuality__svg" width="1722" height="142"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-individuality"></use></svg>

		<div class="individuality__box">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'individuality__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="individuality__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>
		</div>

		<div class="individuality__info">
			<svg class="individuality__logo" width="527" height="756"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-logo"></use></svg>

			<?php if ( get_sub_field( 'small-text' ) ) : ?>
				<div class="individuality__small-text"><?php the_sub_field( 'small-text' ); ?></div>
			<?php endif; ?>

			<?php if ( get_sub_field( 'catalog' ) ) : ?>
				<a href="<?php the_sub_field( 'catalog' ); ?>" class="btn individuality__link" target="_blank">
					Открыть каталог
					<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>
