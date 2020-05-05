<?php

/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * Functions hooked in to storefront_page add_action
	 *
	 * @hooked storefront_page_header          - 10
	 * @hooked storefront_page_content         - 20
	 */
	do_action('storefront_page');
	?>
	<?php
	// check if the repeater field has rows of data
	if (have_rows('event')) :

		// loop through the rows of data
		while (have_rows('event')) : the_row();
			if (get_sub_field('shop_rsvp_link_or_email') === 'Link') {
				$rsvp_link = get_sub_field('shop_rsvp_link');
			} else {
				$rsvp_link = 'Mail to: ' . get_sub_field('shop_rsvp_email');
			}
	?>
			<article class="event">
				<div class="event__image">
					<?php
					$image = get_sub_field('event_image');
					if (!empty($image)) : ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="event__content">
					<h2 class="entry-title">
						<?php the_sub_field('event_title'); ?>
					</h2>
					<p><?php the_sub_field('shop_description'); ?></p>
					<p>Address: <?php the_sub_field('location'); ?></p>
					<p>The date our shop started in this address is: <?php the_sub_field('shop_started_date'); ?></p>

					<p class="event__time">Opening time is: <?php the_sub_field('shop_opening_time'); ?> and
						Closing time is: <?php the_sub_field('shop_closing_time'); ?></p>
					<a class="event__link" href="<?php echo $rsvp_link; ?>">Click here to be with us</a>
					<p><?php the_sub_field('email'); ?></p>
					<!--  -->
					<?php
					$location = get_sub_field('shop_map');
					if ($location) : ?>
						<div class="acf-map" data-zoom="16">
							<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
						</div>
					<?php endif; ?>
					<!--  -->
				</div>
			</article>
	<?php endwhile;

	else :

	// no rows found

	endif;


	?>
</article><!-- #post-## -->