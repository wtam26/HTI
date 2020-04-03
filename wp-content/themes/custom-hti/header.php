<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head();?>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5a06ce366f.js" crossorigin="anonymous"></script>

</head>

<body <?php body_class(); ?>>
	<!-- site header -->
	<header class="site-header">

		<!-- header-search -->

		<div class="hd-search">
			<?php get_search_form(); ?>
		</div>
                    
        <!-- /header-search -->
		
		<nav class="site-nav">
			<?php
				$args = array(
					'theme_location' => 'primary'
				);
			?>
			<?php wp_nav_menu( $args ); ?>
		</nav>
	</header>

</body>
