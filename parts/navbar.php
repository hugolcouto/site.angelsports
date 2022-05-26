<section class="navbar">
	<section class="navbar__content">
		<div class="navbar__content__leftcontainer">
			<a href="/" class="navbar__content__leftcontainer__logo">
				<img loading="lazy" data-src="<?= get_custom_logo_url() ?>" alt="Logo Angel Sports" class="custom-logo lozad">
			</a>

			<nav class="navbar__content__leftcontainer__social">
				<a href="#facebook" title="Facebook">
					<i class="fa fa-facebook"></i>
				</a>
				<a href="#instagram" title="Instagram">
					<i class="fa fa-instagram"></i>
				</a>
				<span>@angelsports</span>
			</nav>
		</div>

		<div class="navbar__content__rightcontainer">
			<form action="" class="navbar__content__rightcontainer__search">
				<button id="open-search-input" title="Busca">
					<i class="fa fa-search"></i>
				</button>

				<input type="search" name="s" id="input-search" placeholder="Faça sua busca">
			</form>

			<nav class="navbar__content__rightcontainer__menu">
				<?php call_primary_menu() ?>
			</nav>
		</div>
	</section>
</section>