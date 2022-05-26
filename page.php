<?php
get_header();
get_template_part('parts/navbar');
get_template_part('parts/section-heading', null, ["title" => get_the_title()]);
get_template_part('parts/page/content');
get_footer();
