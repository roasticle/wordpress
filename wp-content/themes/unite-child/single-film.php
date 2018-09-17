<?php

get_header();
the_post();


// vars
global $post;
$countries = wp_get_post_terms( $post->ID, 'country');
$country_text = "";
foreach ($countries as $country) {
  $country_text .= $country . ", ";
}

?>

<div class="wrap">

		<h2><?php the_title(); ?></h2>
    <h3>Country: <?php //echo $country_text; ?></h3>
		<h3>Ticket Price: <?php the_field('ticket_price'); ?></h3>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php the_content(); ?>
		</main>
	</div>

</div>

<?php get_footer(); ?>
