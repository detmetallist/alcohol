<?php get_header(); ?>
	<section class="main_section contacts_section">
		<div class="container">
			<?php require_once "top.php"; ?>
			<h1>Контакты</h1>
		</div>
	</section>
	<section class="contacts_content">
		<div class="container">
			<div class="breadcrumbs">
				<a href="/">Главная</a> - Контакты
			</div>
			<div class="dvabloka">
				<div class="item">
					<p class="p_bold"><i class="fa fa-mobile"></i><?php echo do_shortcode('[sc name="phone"][/sc]'); ?></p>
					<p><i class="fa fa-envelope-o"></i><?php echo do_shortcode('[sc name="email"][/sc]'); ?></p>
					<!--<p><i class="fa fa-map-marker"></i><?php echo do_shortcode('[sc name="adress"][/sc]'); ?></p> -->
					<div class="soc">
						<?php if(!strpos(do_shortcode('[sc name="whatsapp"][/sc]'),'not exist')): ?>
							<a href="https://wa.me/<?php echo do_shortcode('[sc name="whatsapp"][/sc]'); ?>" target="blanc"><i class="fa fa-whatsapp"></i></a>
						<?php endif; ?>
						<?php if(!strpos(do_shortcode('[sc name="viber"][/sc]'),'not exist')): ?>
							<a href="viber://chat?number=<?php echo do_shortcode('[sc name="viber"][/sc]'); ?>" target="blanc"><img src="<?php echo get_template_directory_uri() ?>/img/viber-grey.svg"></a>
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
				<div class="item">
					<!--<?php echo do_shortcode('[sc name="google_map_code"][/sc]'); ?> -->
				</div>
			</div>
		</div>
	</section>
	<?php require_once('section-zapis.php'); ?>
<?php get_footer(); ?>