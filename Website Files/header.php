<?php
  /*
  * Global Header
  *
  */

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="<?= $meta_descr ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= STYLES_PATH . "main.css"; ?>" />
    <link rel="stylesheet" href="<?= STYLES_PATH . "all.min.css"; ?>" /> <!-- Font Awesome styles -->
    <link rel="stylesheet" href="<?= STYLES_PATH . "prism.css"; ?>" /> <!-- PrismJS styles -->

    <!--favicon and shortcut icons-->
    <link rel="apple-touch-icon" sizes="57x57" href=<?= ICONS_PATH . "apple-icon-57x57.png" ?> />
    <link rel="apple-touch-icon" sizes="60x60" href=<?= ICONS_PATH . "apple-icon-60x60.png" ?> />
    <link rel="apple-touch-icon" sizes="72x72" href=<?= ICONS_PATH . "apple-icon-72x72.png" ?> />
    <link rel="apple-touch-icon" sizes="76x76" href=<?= ICONS_PATH . "apple-icon-76x76.png" ?> />
    <link rel="apple-touch-icon" sizes="114x114" href=<?= ICONS_PATH . "apple-icon-114x114.png" ?> />
    <link rel="apple-touch-icon" sizes="120x120" href=<?= ICONS_PATH ."apple-icon-120x120.png" ?> />
    <link rel="apple-touch-icon" sizes="144x144" href=<?= ICONS_PATH . "apple-icon-144x144.png" ?> />
    <link rel="apple-touch-icon" sizes="152x152" href=<?= ICONS_PATH . "apple-icon-152x152.png" ?> />
    <link rel="apple-touch-icon" sizes="180x180" href=<?= ICONS_PATH . "apple-icon-180x180.png" ?> />
    <link rel="icon" type="image/png" sizes="192x192"  href=<?= ICONS_PATH . "android-icon-192x192.png" ?> />
    <link rel="icon" type="image/png" sizes="32x32" href=<?= ICONS_PATH . "favicon-32x32.png" ?> />
    <link rel="icon" type="image/png" sizes="96x96" href=<?= ICONS_PATH . "favicon-96x96.png" ?> />
    <link rel="icon" type="image/png" sizes="16x16" href=<?= ICONS_PATH . "favicon-16x16.png" ?> />
    <link rel="manifest" href=<?= ICONS_PATH . "manifest.json" ?> />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content=<?= ICONS_PATH . "/ms-icon-144x144.png" ?> />
    <meta name="theme-color" content="#ffffff" />

    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!-- [if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <title><?= $title ?></title>
	</head>
	<body class="preload">
    <div id="header" class="header--opac"> <!--begin navigation bar-->
      <div id="header_inner">
        <div>
          <img src="<?= IMAGES_PATH ?>/logo.png" id="site-logo" alt="Logo" style="width: 3rem;">
        </div>
        <div>
          <ul>
            <li><a href="/"><span class="navCent">Home</span></a></li>
            <li><a href="/projects"><span class="navCent">Projects</span></a></li>
            <li><a href="/blog"><span class="navCent">Blog</span></a></li>
          </ul>
          <a href="#0" id="c-menu">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </div> <!--end navigation bar-->
    </div>

    <div id="header-collapse" style="display:none;"> <!--begin collapsible navigation-->
      <div id="collapse">
        <a href="#0" id="col-close">
          <span>x</span>
        </a>
      </div>
      <div>
        <ul>
          <li><a href="/"><span class="navCent">Home</span></a></li>
          <li><a href="/projects"><span class="navCent">Projects</span></a></li>
          <li><a href="/blog"><span class="navCent">Blog</span></a></li>
        </ul></div>
      </div> <!--end collapsible navigation-->

<?php //echo dirname(__FILE__);
//echo ($_SERVER['DOCUMENT_ROOT']); ?>
