<!-- Contacts -->
	<section class="contacts">
		<h2 class="text_white text_upper"><?php pll_e('title_contact'); ?></h2>
		<div class="wrapper">
			<!-- <form action="send.php" method="post">
				<input class="name_form" type="text" name="name" placeholder="<?php pll_e('form_name'); ?>">
				<input class="phone_form" type="tel" name="phone" placeholder="<?php pll_e('form_phone'); ?>">
				<input class="email_form" type="email" name="email" placeholder="<?php pll_e('form_email'); ?>">
				<textarea class="textarea_form" name="content" placeholder="<?php pll_e('form_text'); ?>"></textarea>
				<input class="submit_form" type="submit" name="submit" value="<?php pll_e('form_button'); ?>">
			</form> -->

			<?php echo do_shortcode('[cf7-form cf7key="%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d0%bd%d0%b0%d1%8f-%d1%84%d0%be%d1%80%d0%bc%d0%b0-1"]'); ?>
			<div class="contacts_text">
				<!-- <p><?php //echo get_theme_mod('my_adress'); ?></p>Украина, 08292, г. Буча, ул. Яблунская (Кирова), 144. -->
				<p><?php pll_e('adress'); ?></p>
				<p><?php echo get_theme_mod('number1'); ?></p>
				<p><?php echo get_theme_mod('number2'); ?></p>
				<p><?php echo get_theme_mod('my_email'); ?></p>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1028.4579884120044!2d30.20805871420345!3d50.53379811233085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b319fb85f056b%3A0x50c5c00de7a482f4!2z0LLRg9C70LjRhtGPINCv0LHQu9GD0L3RgdGM0LrQsCwgMTQ0LCDQkdGD0YfQsCwg0JrQuNGX0LLRgdGM0LrQsCDQvtCx0LsuLCAwODI5Mg!5e0!3m2!1sru!2sua!4v1519911082776" width="100%" height="400px" frameborder="0" style="border:0;filter: grayscale(100%) invert(80%);" allowfullscreen></iframe>
	</section>

	<!-- Footer -->
<footer class="footer">
	<div class="wrapper">
		<div class="logo">
			<a href="<?php echo get_home_url(); ?>"><img target="_blank" src="<?php bloginfo('template_url'); ?>/src/img/icons/logo_horisontal-white.png" alt=""></a>
		</div>
		<div class="footer_text">
			<p>Ecointel 2015-2018 Все права защищены <br>
			Разработано компанией <a target="_blank" href="http://softvel.com/">Softvel</a></p>
		</div>
		<div class="footer_social">
			<a href="<?php echo get_theme_mod('my_facebook'); ?>"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/fb-icon.png" alt=""></a>
		</div>
	</div>
</footer>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<?php wp_footer(); ?>

</body>
</html>