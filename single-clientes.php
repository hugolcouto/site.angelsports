<?php
$fields = get_fields();
get_header();
get_template_part('parts/navbar');
get_template_part(
	'parts/section-heading',
	null,
	[
		"title" => get_the_title(),
		"subtitle" => $fields['team'] . ' - ' . $fields['country'],
	]
);
get_template_part(
	'parts/customers/customer-single',
	null,
	[
		"thumb" =>  wp_get_attachment_image_url(get_post_thumbnail_id(), 800, 600),
		"title" => get_the_title()
	]
);
get_template_part('parts/customers/categories-list');
get_footer();
