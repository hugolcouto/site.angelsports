<section class="categories-list">
	<h4>Categorias</h4>

	<form action="">
		<input class="input" type="text" name="s" id="" placeholder="Quem está procurando?">
	</form>

	<ul>
		<?php wp_list_cats([
			'show_count' => true,
			'hide_empty' => false
		]); ?>
	</ul>
</section>