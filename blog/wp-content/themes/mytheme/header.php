<!-- begin the header file -->
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,700italic,300italic,100italic,400italic' rel='stylesheet' type='text/css'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../../../../css/normalize.min.css">
        <link rel="stylesheet" href="../../../../../css/main.css">
        
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
	<div id='header_home'>
            <div id='cssmenu'>
                    <ul>
                        <li>
                            <a href='../../../../../about.html'>About</a>
                        </li>
                        <li>
                            <a href='../../../../../blog'>Blog</a>
                        </li>
                        <li>
                            <a href="../../../../../projects.html">Projects</a>
                        </li>
                        <li class='active'>
                            <a href="#">Photography</a>
                            <ul>
                                <li><a href="../../../../../portraits.html">Portraits</a></li>
                                <li><a href='../../../../../tintypes.html'>Tintypes</a></li>
                                <li><a href="../../../../../street.html">Street</a></li>
                                <li><a href="../../../../../wandering.html">Wandering</a></li>
                                <li><a href="../../../../../BW.html">B&W</a></li>
                                <li><a href="../../../../../weddingphotography.html">Wedding</a></li>
                            </ul>
                        </li>
                            <a id='logo' href='../../../../../index.html'><img src="../../../../../img/Logo.png"></a>
                    </ul>
            </div>
	</div>
<!--menu js-->
    <script src="../../../../../menu/script.js"></script>
</body>
<!-- end the header file -->