<section class="customers">
	<h2>Clientes</h2>
	<h4>#TEAM ANGEL</h4>

	<section class="customers__carousel">
		<button id="home-customer-prev"><i class="fa fa-chevron-left"></i></button>
		<button id="home-customer-next"><i class="fa fa-chevron-right"></i></button>
		<ul id="home-customer-carousel">
			<?php for ($i = 0; $i <= 10; $i++) : ?>
				<li class="carousel__item">
					<a href="#">
						<figure>
							<img loading="lazy" data-src="http://placekitten.com/800/400" alt="" class="lozad">
							<figcaption>
								<span class="name">Nome</span>
								<span class="club">Clube</span>
							</figcaption>
						</figure>
					</a>
				</li>
			<?php endfor; ?>
		</ul>
	</section>
</section>