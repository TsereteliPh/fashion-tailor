<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
	$tel = get_field( 'tel', 'options' );
	$socials = get_field( 'socials', 'options' );
?>
<header class="header">
	<div class="container">
		<div class="header__panel">
			<a href="<?php echo bloginfo( 'url' ); ?>" class="header__logo" aria-label="Логотип компании Fashion Tailor">
				<div class="logo"></div>

				Производство спортивной одежды
			</a>

			<button class="header__catalog" type="button">
				<span></span>
			</button>

			<?php wp_nav_menu( array(
				'theme_location' => 'menu_main',
				'container' => '',
				'menu_id' => 'menu-main',
				'menu_class' => 'reset-list header__menu'
			) ); ?>

			<?php if ( $tel || $options ) : ?>
				<div class="contacts header__contacts">
					<?php if ( $tel ) : ?>
						<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="contacts__tel"><?php echo $tel; ?></a>
					<?php endif; ?>

					<?php if ( $socials ) : ?>
						<div class="contacts__socials">
							<?php foreach ( $socials as $social ) : ?>
								<a href="<?php echo $social['link']; ?>" class="contacts__social">
									<svg width="20" height="20"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['social']; ?>"></use></svg>
									<?php echo $social['label']; ?>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<button class="btn-underline header__callback" type="button" data-fancybox data-src="<?php //TODO: callback modal ?>">Заказать звонок</button>

			<button class="header__burger" type="button" aria-label="Открыть/Закрыть меню">
				<span></span>
			</button>
		</div>

		<div class="header__drop">
			<?php wp_nav_menu( array(
				'theme_location' => 'menu_main',
				'container' => '',
				'menu_id' => 'menu-main',
				'menu_class' => 'reset-list header__drop-menu'
			) ); ?>

			<?php if ( $tel || $options ) : ?>
				<div class="contacts header__drop-contacts">
					<?php if ( $tel ) : ?>
						<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="contacts__tel"><?php echo $tel; ?></a>
					<?php endif; ?>

					<?php if ( $socials ) : ?>
						<div class="contacts__socials">
							<?php foreach ( $socials as $social ) : ?>
								<a href="<?php echo $social['link']; ?>" class="contacts__social">
									<svg width="20" height="20"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['social']; ?>"></use></svg>
									<?php echo $social['label']; ?>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<button class="btn-underline header__drop-callback" type="button" data-fancybox data-src="<?php //TODO: callback modal ?>">Заказать звонок</button>
		</div>
	</div>
</header>

<main class="main">
	<?php if ( is_front_page() ) get_template_part('layouts/partials/welcome'); ?>

