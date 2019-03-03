<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset = "<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?></title>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126134074-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-126134074-1');
		</script>
        <link rel = "profile" href="http://gmpg.org/xfn/11" />
        <link rel = "stylesheet" href = "<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel = "pingback" href = "<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		
		<link rel = "stylesheet" href = "<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
		
		<script src = "<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.min.js"></script>
		<script src = "<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
		<script src = "<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
		
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel = "stylesheet" href = "<?php bloginfo('template_url'); ?>/css/main.css">
		<?php 
			wp_head();
			require_once('functions.php'); 
		?>
	</head>
	<body>
		<a id = "opis"></a>
		<nav class="navbar sticky-top navbar-expand-lg navbar-light  menuMain">
			<div class = "container">
				<div class="navbar-header logoSmall">
					<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src = "<?php bloginfo('template_url'); ?>/img/logo-bg-1.jpg" alt = "Caviaron logo" ></a>
				</div>
				
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Pokaż lub ukryj nawigację">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="mainNavigation">
					<ul class="navbar-nav menuList">
						<li class="nav-item">
							<a href="#opis" class="nav-link">O FIRMIE CAVIARON</a>
						</li>
						<li class="nav-item">
							<a href="#produkty" class="nav-link">PRODUKTY</a>
						</li>
						<li class="nav-item">
							<a href="#dzialanie" class="nav-link">JAK TO DZIAŁA</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class = "social">
			<a href="https://www.facebook.com/caviaron/"><img src = "<?php bloginfo('template_url'); ?>/img/facebook-01.png" alt = "Facebook" ></a>
			<a href="<?php echo site_url(); ?>"><img src = "<?php bloginfo('template_url'); ?>/img/instagram-01.png" alt = "Instagram" ></a>
		</div>	