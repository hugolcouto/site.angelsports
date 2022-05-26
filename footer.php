</main>
<footer class="footer">
	<div class="footer__content">
		<section class="footer__content__left">
			<h5>Entre em contato conosco!</h5>
			<address>
				<i class="fa fa-phone"></i>
				<span>
					<a href="tel:+552433664854">
						000-000-000
					</a>
				</span>
			</address>
			<address>
				<i class="fa fa-envelope"></i>
				<span>
					<a href="mailto:teste@teste.com">
						teste@teste.com
					</a>
				</span>
			</address>
			<address>
				<i class="fa fa-map-marker"></i>
				<div>
					<span>
						Avenida das Américas, 700 Shopping Città América
					</span>
					<span>
						Loja 217m, Barra da Tijuca, Rio de Janeiro-RJ cep.: 22640-100
					</span>
				</div>
			</address>
		</section>

		<section class="footer__content__right">
			<img loading="lazy" data-src="<?= get_custom_logo_url() ?>" alt="Logo Angel Sports" class="custom-logo lozad">
		</section>
	</div>
</footer>
<?php wp_footer() ?>
<script>
	const observer = lozad();
	observer.observe();
</script>
</body>

</html>