<?php
get_header();
get_template_part('parts/navbar');
echo do_shortcode('[smartslider3 slider="2"]');
get_template_part('parts/home/customers');
get_template_part('parts/home/testimonials');
get_template_part('parts/home/sponsors');
get_footer();
