<li class="review-card <?php echo $args['class']; ?>">
	<?php
		$review_video = get_field( 'review-video' );
		$review_letter = get_field( 'review-letter' );
		$review_text = get_field( 'review-text' );
	?>

	<?php if ( $review_video ) : ?>
		<a href="<?php echo $review_video[$review_video['type']]; ?>" class="review-card__video" data-fancybox>
			<?php echo wp_get_attachment_image( $review_video['preview'] ? $review_video['preview'] : 30, 'large', false ); ?>

			<button class="btn-play review-card__play" type="button"></button>
		</a>
	<?php endif; ?>

	<?php if ( $review_letter ) : ?>
		<a href="<?php echo $review_letter['url']; ?>" class="review-card__letter" data-fancybox>
			<?php echo wp_get_attachment_image( $review_letter['ID'], 'medium', false ); ?>
		</a>
	<?php endif; ?>

	<div class="review-card__title"><?php the_title(); ?></div>

	<?php if ( $review_text ) : ?>
		<div class="review-card__text"><?php echo $review_text; ?></div>
	<?php endif; ?>
</li>
