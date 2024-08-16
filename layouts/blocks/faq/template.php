<section class="faq">
	<div class="container faq__container">
		<div class="faq__box">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'faq__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php
				$faq = get_sub_field( 'faq' );
				if ( $faq ) :
					?>

					<ol class="reset-list faq__list">
						<?php foreach ( $faq as $item ) : ?>
							<li class="faq__item">
								<div class="faq__item-question"><?php echo $item['question']; ?></div>

								<div class="faq__item-answer"><?php echo $item['answer']; ?></div>
							</li>
						<?php endforeach; ?>
					</ol>

					<?php
				endif;
			?>

			<div class="faq__extra">
				<button class="btn btn--unfill faq__btn" type="button" data-fancybox data-src="#question">
					Задать другой вопрос
					<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
				</button>

				<?php if ( get_sub_field( 'text' ) ) : ?>
					<div class="faq__text"><?php the_sub_field( 'text' ); ?></div>
				<?php endif; ?>
			</div>
		</div>

		<?php
			$img = get_sub_field( 'img' );
			if ( $img ) :
				?>

				<div class="faq__img"><?php echo wp_get_attachment_image( $img, 'full', false ); ?></div>

				<?php
			endif;
		?>
	</div>
</section>
