<?php $bg = get_sub_field( 'bg' ) ?? false; ?>
<section class="image-list" style="background-image: url('<?php echo $bg ? $bg : ''; ?>');">
	<div class="container">
		<div class="image-list__box image-list__box--<?php echo get_sub_field( 'position' ); ?>">
			<?php get_template_part( '/layouts/partials/title-default', null, array(
				'class' => 'image-list__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( get_sub_field( 'small-text' ) ) : ?>
				<div class="image-list__small-text"><?php the_sub_field( 'small-text' ); ?></div>
			<?php endif; ?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="image-list__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<?php
				$list = get_sub_field( 'list' );
				if ( $list ) :
					?>

					<ul class="reset-list image-list__list">
						<?php foreach ( $list as $item ) :?>
                            <li class="image-list__item">
								<?php if ( $item['label'] ) : ?>
									<div class="image-list__item-label"><?php echo $item['label']; ?></div>
								<?php endif; ?>

								<?php if ( $item['text'] ) : ?>
									<div class="image-list__item-text"><?php echo $item['text']; ?></div>
								<?php endif; ?>
							</li>
                        <?php endforeach;?>
					</ul>

					<?php
				endif;
			?>
		</div>
	</div>
</section>
