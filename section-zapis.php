<section class="zapis">
		<div class="container">
			<h3>Записаться на прием</h3>
			<div class="dvabloka">
				<div class="item">
					<p class="p_phone_mail"><?php echo do_shortcode('[sc name="phone"][/sc]'); ?><br><?php echo do_shortcode('[sc name="email"][/sc]'); ?></p>
					<!--<p class="p_adres"><?php echo do_shortcode('[sc name="adress"][/sc]'); ?></p> -->
					<p class="p_text">Клиника работает круглосуточно и анонимно.</p>
				</div>
				<div class="item">
					<form>
						<input type="text" name="name" placeholder="Ваше имя" required>
						<input type="text" name="phone" placeholder="+7 ХХХ ХХ-ХХ-ХХХ" required>
						<input type="hidden" name="otkuda" value="Страница наркомании, блок записи на приём">
						<input type="hidden" name="mailto" value="<?php echo do_shortcode('[sc name="mailto"][/sc]'); ?>">
						<p><input type="checkbox" name="soglasen" required>Я согласен с политикой обработки персональных данных</p>
						<button type="submit">Записаться на прием</button>
					</form>
				</div>
			</div>
		</div>
	</section>