<?php 
	$menu_params = array(
        'container'=> false,
    ); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?v1.53" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/media.css?v1.53" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.theme.default.min.css">
	<title>Personality - Центр психологической поддержки и коррекции поведения</title>
</head>
<body>
	<div class="popup">
		<div class="popup_form">
			<h2>Мы Вам перезвоним</h2>
			<form>
				<input type="text" name="name" placeholder="Ваше имя" required>
				<input type="text" name="phone" placeholder="+7 ХХХ ХХ-ХХ-ХХХ" required>
				<input type="hidden" name="otkuda">
				<input type="hidden" name="mailto" value="<?php echo do_shortcode('[sc name="mailto"][/sc]'); ?>">
				<button type="submit">Отправить</button>
			</form>
			<div class="form_close"><i class="fa fa-times"></i></div>
		</div>
	</div>
	<div class="popup_certificates">
		<div class="certificates_img"></div>
		<div class="popup_load"><img src="<?php echo get_template_directory_uri() ?>/img/loading.gif"></div>
		<div class="form_close"><i class="fa fa-times"></i></div>
	</div>
	<div class="popup_thanks">Спасибо за заявку<br>Мы с Вами свяжемся<br>в ближайшее время</div>
	<div class="popup_over"></div>
	<div class="mobile_menu">
		<div class="container">
			<div class="mobile_logo_menu">
				<a href="/">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri() ?>/img/logo-text.png">
						<p>Центр психологической поддержки<br>и коррекции поведения</p>
					</div>
				</a>
				<div class="close_button">X</div>
			</div>
			<?php wp_nav_menu($menu_params); ?>
			<div class="mobile_menu_contacts">
				<div class="contacts">
					<?php if(!strpos(do_shortcode('[sc name="email"][/sc]'),'not exist')): ?>
						<p class="mail">
							<i class="fa fa-envelope-o"></i>
							<a href="mailto:<?php echo do_shortcode('[sc name="email"][/sc]'); ?>"><?php echo do_shortcode('[sc name="email"][/sc]'); ?></a>
						</p>
					<?php endif; ?>
					<?php if(!strpos(do_shortcode('[sc name="phone"][/sc]'),'not exist')): ?>
						<p class="phone"><a href="tel:<?php echo do_shortcode('[sc name="phone"][/sc]'); ?>"><?php echo do_shortcode('[sc name="phone"][/sc]'); ?></a></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="soc">
				<?php if(!strpos(do_shortcode('[sc name="whatsapp"][/sc]'),'not exist')): ?>
					<a href="https://wa.me/<?php echo do_shortcode('[sc name="whatsapp"][/sc]'); ?>" target="blanc"><i class="fa fa-whatsapp"></i></a>
				<?php endif; ?>
				<?php if(!strpos(do_shortcode('[sc name="viber"][/sc]'),'not exist')): ?>
					<a href="viber://chat?number=<?php echo do_shortcode('[sc name="viber"][/sc]'); ?>" target="blanc"><img src="<?php echo get_template_directory_uri() ?>/img/viber.svg"></a>
				<?php endif; ?>
				<?php if(!strpos(do_shortcode('[sc name="instagram"][/sc]'),'not exist')): ?>
					<a href="https://instagram.com/<?php echo do_shortcode('[sc name="instagram"][/sc]'); ?>" target="blanc"><i class="fa fa-instagram"></i></a>
				<?php endif; ?>
				<?php if(!strpos(do_shortcode('[sc name="vk"][/sc]'),'not exist')): ?>
					<a href="https://vk.com/<?php echo do_shortcode('[sc name="vk"][/sc]'); ?>" target="blanc"><i class="fa fa-vk"></i></a>
				<?php endif; ?>
				<?php if(!strpos(do_shortcode('[sc name="telegram"][/sc]'),'not exist')): ?>
					<a href="https://t.me/<?php echo do_shortcode('[sc name="telegram"][/sc]'); ?>" target="blanc"><i class="fa fa-telegram"></i></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<header>
		<div class="header_block">
			<div class="container">
				<div class="left">
					<a href="/">
						<div class="logo">
							<img src="<?php echo get_template_directory_uri() ?>/img/logo-text.png">
							<p>Центр психологической поддержки<br>и коррекции поведения</p>
						</div>
					</a>
				</div>
				<div class="right">
					<?php wp_nav_menu($menu_params); ?>
				</div>
			</div>
			<div class="header_right_bg"></div>
		</div>
	</header>
	<div class="mobile_header">
		<div class="container">
			<div class="mobile_logo_menu">
				<a href="/">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri() ?>/img/logo-text.png">
						<p>Центр психологической поддержки<br>и коррекции поведения</p>
					</div>
				</a>
				<div class="mobile_header_phone">
					<a href="tel:<?php echo do_shortcode('[sc name="phone"][/sc]'); ?>"><?php echo do_shortcode('[sc name="phone"][/sc]'); ?></a>
				</div>
				<div class="menu_button">
					<div class="menu_polosa"></div>
					<div class="menu_polosa"></div>
					<div class="menu_polosa"></div>
					<div class="menu_polosa"></div>
				</div>
			</div>
		</div>
	</div>