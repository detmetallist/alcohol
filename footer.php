<?php 
	$menu_params = array(
        'container'=> false,
    ); 
?>
	<footer>
		<div class="container">
			<div class="tribloka">
				<div class="item">
					<?php wp_nav_menu($menu_params); ?>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/img/footer_logo.png">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo-text.png">
					<p>Центр психологической поддержки<br>и коррекции поведения</p>
				</div>
				<div class="item">
					<div class="phone"><a href="tel:<?php echo do_shortcode('[sc name="phone"][/sc]'); ?>"><?php echo do_shortcode('[sc name="phone"][/sc]'); ?></a></div>
					<div class="contacts">
						<p><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo do_shortcode('[sc name="email"][/sc]'); ?>" target="blanc"><?php echo do_shortcode('[sc name="email"][/sc]'); ?></a>
						<!--<p><i class="fa fa-map-marker"></i><?php echo do_shortcode('[sc name="adress"][/sc]'); ?></p> -->
					</div>
					<div class="politica"><a href="privacy-policy">Политика конфиденциальности</a></div>
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
	</footer>
	<div class="vverh"></div>
</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.inputmask.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js?v1.4"></script>

</html>