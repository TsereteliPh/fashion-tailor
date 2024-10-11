</main>

<?php
	$tel = get_field( 'tel', 'options' );
	$address = get_field( 'address', 'options' );
	$socials = get_field( 'socials', 'options' );
?>
<footer class="footer">
	<div class="container footer__container">
		<?php wp_nav_menu( array(
			'theme_location' => 'footer_menu',
			'container' => '',
			'menu_id' => 'footer-menu',
			'menu_class' => 'reset-list footer__menu'
		) ); ?>

		<div class="footer__panel">
			<div class="footer__copyright">
				Производство
				спортивной одежды<br>
				<br>
				Copyright <?php echo date( 'Y' ); ?>
			</div>

			<div class="footer__address">
				Адрес<br>
				<br>
				<address><?php echo $address; ?></address>
			</div>

			<div class="footer__info">
				<a href="<?php echo bloginfo( 'url' ); ?>" class="footer__logo">
					<svg width="527" height="756"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-logo"></use></svg>

					Производство спортивной одежды
				</a>

				<div class="footer__policy">Оставляя заявки на нашем сайте, ознакомьтесь с <a href="<?php echo get_privacy_policy_url(); ?>">Политикой конфиденциальности</a></div>
			</div>

			<?php if ( $tel || $options ) : ?>
				<div class="contacts footer__contacts">
					<?php if ( $tel ) : ?>
						<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="contacts__tel"><?php echo $tel; ?></a>
					<?php endif; ?>

					<?php if ( $socials ) : ?>
						<div class="contacts__socials">
							<?php foreach ( $socials as $social ) : ?>
								<a href="<?php echo $social['link']; ?>" class="contacts__social contacts__social--<?php echo $social['social']; ?>">
									<svg width="20" height="20"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['social']; ?>"></use></svg>
									<?php echo $social['label']; ?>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<button class="btn-underline footer__callback" type="button" data-fancybox data-src="#callback">Заказать звонок</button>
		</div>
	</div>
</footer>

<?php get_template_part('layouts/partials/modals'); ?>

<?php wp_footer(); ?>

</body>
</html>
