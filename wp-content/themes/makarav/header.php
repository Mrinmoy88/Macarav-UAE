<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(' | ', true, 'right');
			bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap-grid.min.css" integrity="sha512-JQksK36WdRekVrvdxNyV3B0Q1huqbTkIQNbz1dlcFVgNynEMRl0F8OSqOGdVppLUDIvsOejhr/W5L3G/b3J+8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.css" integrity="sha512-NDcw4w5Uk5nra1mdgmYYbghnm2azNRbxeI63fd3Zw72aYzFYdBGgODILLl1tHZezbC8Kep/Ep/civILr5nd1Qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/style.css">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<!-- header start -->
	<div class="header-area">
		<header>
			<nav class="container-fluid" id='menu'>
				<div class="logo">
					<a href="<?php echo site_url('/') ?>">

						<?php
						if (function_exists('the_custom_logo')) {
							the_custom_logo();
						}
						?>
					</a>
				</div>
				<div class="hamburger"></div>
				<div class="main-menu">


					<ul>
						<?php
						$locations = get_nav_menu_locations();
						$primaryMenuID = $locations['menu-1'];
						$primaryMenu = wp_get_nav_menu_items($primaryMenuID);

						// Get the current page URL
						$currentURL = home_url(add_query_arg(array(), $wp->request)) . '/';
						//echo $currentURL;

						// First, let's identify all parent menu items
						$parentMenuItems = [];
						foreach ($primaryMenu as $menu) {
							if ($menu->menu_item_parent == 0) { // If this is a top-level item (no parent)
								$parentMenuItems[] = $menu;
							}
						}

						// Now, let's display only those menu items that do not have a parent
						foreach ($parentMenuItems as $parentItem) {
							$menuParentTitle = $parentItem->title;
							$menuParentURL = $parentItem->url;
							$menuChildren = get_nav_menu_item_children($parentItem->ID, $primaryMenu);
							//echo $menuParentURL;

							$isActive = ($menuParentURL == $currentURL) ? 'current-menu-item' : '';



							if (!empty($menuChildren)) {

								echo '<li class="' . $isActive . '"><a href="#">' . $menuParentTitle . '</a>';
								echo '<ul >';
								foreach ($menuChildren as $child) {
									$isActive1 = ($child->url == $currentURL) ? 'current-menu-item' : '';
									echo '<li><a href="' . $child->url . '" class="' . $isActive1 . '">' . $child->title . '</a></li>';
								}
								echo '</ul></li>';
							} else {
								echo '<li class="' . $isActive . '"><a href="' . $menuParentURL . '">' . $menuParentTitle . '</a></li>';
							}
						}
						?>

					</ul>

					<a href="tel: 033-6501-1518" class="primary-btn"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<path d="M18.3333 14.0999V16.5999C18.3343 16.832 18.2867 17.0617 18.1937 17.2744C18.1008 17.487 17.9644 17.6779 17.7934 17.8348C17.6224 17.9917 17.4205 18.1112 17.2006 18.1855C16.9808 18.2599 16.7478 18.2875 16.5167 18.2666C13.9523 17.988 11.4892 17.1117 9.32498 15.7083C7.31151 14.4288 5.60443 12.7217 4.32499 10.7083C2.91663 8.53426 2.04019 6.05908 1.76665 3.48325C1.74583 3.25281 1.77321 3.02055 1.84707 2.80127C1.92092 2.58199 2.03963 2.38049 2.19562 2.2096C2.35162 2.03871 2.54149 1.90218 2.75314 1.80869C2.9648 1.7152 3.1936 1.6668 3.42499 1.66658H5.92499C6.32941 1.6626 6.72148 1.80582 7.02812 2.06953C7.33476 2.33324 7.53505 2.69946 7.59165 3.09992C7.69717 3.89997 7.89286 4.68552 8.17499 5.44158C8.2871 5.73985 8.31137 6.06401 8.24491 6.37565C8.17844 6.68729 8.02404 6.97334 7.79998 7.19992L6.74165 8.25825C7.92795 10.3445 9.65536 12.072 11.7417 13.2583L12.8 12.1999C13.0266 11.9759 13.3126 11.8215 13.6243 11.755C13.9359 11.6885 14.26 11.7128 14.5583 11.8249C15.3144 12.107 16.0999 12.3027 16.9 12.4083C17.3048 12.4654 17.6745 12.6693 17.9388 12.9812C18.203 13.2931 18.3435 13.6912 18.3333 14.0999Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg></span>Call us <?php the_field('phone', 'option'); ?></a>
				</div>
			</nav>
		</header>
	</div>

	