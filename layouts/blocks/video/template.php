<?php
	$video = get_sub_field( 'video' );
	if ( $video['link'] || $video['file'] ) :
		?>

		<section class="video">
			<a href="<?php echo $video[$video['type']]; ?>" class="video__link" data-fancybox="video-<?php echo $args['block_id']; ?>">
				<?php echo wp_get_attachment_image( $video['preview'] ? $video['preview'] : 30, 'full', false ); ?>

				<button class="btn-play video__btn" type="button"></button>
			</a>
		</section>

		<?php
	endif;
?>
