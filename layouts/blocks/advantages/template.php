<?php $bg = get_sub_field( 'bg' ); ?>
<section class="advantages" <?php echo $bg ? 'style="background-image: url(' . $bg . ');"' : ''; ?>>
	<div class="container">
		<?php get_template_part( '/layouts/partials/title-default', null, array(
			'class' => 'advantages__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="advantages__text">
				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>

				<?php the_sub_field( 'text' ); ?>
			</div>
		<?php endif; ?>

		<?php
			$advantages = get_sub_field( 'advantages' );
			if ( $advantages ) :
				?>

				<div class="advantages__slider swiper">
					<ul class="reset-list advantages__list swiper-wrapper">
						<?php foreach ( $advantages as $advantage ) : ?>
							<li class="advantages__item swiper-slide">
								<?php if ( $advantage['label'] ) : ?>
									<div class="advantages__item-label"><?php echo $advantage['label']; ?></div>
								<?php endif; ?>

								<?php if ( $advantage['text'] ) : ?>
									<div class="advantages__item-text"><?php echo $advantage['text']; ?></div>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>

					<div class="pagination advantages__pagination"></div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
