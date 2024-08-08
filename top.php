			<div class="top">
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
				<div class="contacts">
					<?php if(!strpos(do_shortcode('[sc name="email"][/sc]'),'not exist')): ?>
						<p class="mail">
							<i class="fa fa-envelope-o"></i>
							<a href="mailto:<?php echo do_shortcode('[sc name="email"][/sc]'); ?>" target="blanc"><?php echo do_shortcode('[sc name="email"][/sc]'); ?></a>
						</p>
					<?php endif; ?>
					<?php if(!strpos(do_shortcode('[sc name="phone"][/sc]'),'not exist')): ?>
						<p class="phone"><a href="tel:<?php echo do_shortcode('[sc name="phone"][/sc]'); ?>"><?php echo do_shortcode('[sc name="phone"][/sc]'); ?></a></p>
					<?php endif; ?>
				</div>
			</div>