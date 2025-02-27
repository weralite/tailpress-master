<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-black text-gray-200 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header class="sticky top-0 bg-black">

			<div class="mx-auto container">
				<div class="lg:relative lg:flex lg:justify-between lg:items-center border-b py-6">
					<div class="flex justify-between items-center lg:child-left">
					<div>
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>

							<?php } ?>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
												id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-black mt-4 p-4 lg:mt-0 lg:p-0 lg:pl-10 xl:pl-16 lg:block xl:bg-transparent xl:block xl:absolute xl:left-1/2 xl:transform xl:-translate-x-1/2',
							'menu_class'      => 'lg:flex lg:mx-10 lg:gap-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4 group', // Add group class here
							'a_class'         => 'relative inline-block font-teko lg:font-light lg:text-4xl xl:text-5xl uppercase transition-all duration-150', // Class for <a>
							'fallback_cb'     => false,
						)
					);
					?>

					<?php
					// Secondary Menu
					wp_nav_menu(
						array(
							'container_id'    => 'secondary-menu',
							'container_class' => 'hidden bg-gray-200 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'secondary',
							'li_class'        => 'lg:mx-4 group', // Add group class here
							'a_class'         => 'relative inline-block font-bold text-xl uppercase transition-all duration-150', // Class for <a>
							'fallback_cb'     => false,
						)
					);
					?>

				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php if (is_front_page()) { ?>
				<!-- Start introduction -->

				<!-- End introduction -->
			<?php } ?>

			<?php do_action('tailpress_content_start'); ?>


			<main>