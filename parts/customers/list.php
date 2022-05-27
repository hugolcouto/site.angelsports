<section class="customer-list">
	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = [
		"post_type" => "clientes",
		"posts_per_page" => '16',
		"paged" => $paged
	];
	query_posts($args);
	if (have_posts()) :
	?>
		<ul>
			<?php
			while (have_posts()) : the_post();
				$fields = get_fields();
			?>
				<li>
					<a href="<?= get_the_permalink() ?>">
						<figure>
							<img loading="lazy" data-src="<?= wp_get_attachment_image_url(get_post_thumbnail_id(), 360, 240) ?>" alt='' class="lozad" />
							<figcaption>
								<h3><?= $post->post_title; ?></h3>
								<h4><?= $fields['function'] ?> do <?= $fields['team'] ?> (<?= $fields['country'] ?>)</h4>
							</figcaption>
						</figure>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php
		if (function_exists('custom_pagination')) {
			custom_pagination($loop->max_num_pages, "", $paged);
		}
	endif;
	?>
</section>