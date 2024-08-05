<section class="order-types">
	<div class="container--small">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'order-types__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$types = get_sub_field( 'types' );
			if ( $types ) :
				?>

				<img class="order-types__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/order-types-img.png" alt="Фотография различных изделий компании Fashion Tailor" width="1080" height="550">

				<ul class="reset-list order-types__list">
					<?php foreach ( $types as $type ) : ?>
						<li class="order-types__item">
							<div class="tooltip"></div>

							<div class="order-types__item-label"><?php echo $type['label']; ?></div>

							<div class="order-types__item-text"><?php echo $type['text']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>

		<button class="btn order-types__btn" type="button" data-fancybox data-src="<?php //TODO modal ?>">
			Расчитать стоимость
			<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
		</button>
	</div>
</section>
