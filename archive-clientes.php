<?php
get_header();
get_template_part('parts/navbar');
get_template_part('parts/section-heading', null, ["title" => "Clientes"]);
get_template_part('parts/customers/list');
get_template_part('parts/customers/categories-list');
get_footer();
