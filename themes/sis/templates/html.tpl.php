<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php print $head_title; ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <script src="<?php print $theme_path; ?>/js/modernizr-2.0.6.min.js"></script>
	
	<?php
	  
	  // all stylesheets (themes, modules...)
	  print $styles;
	 
	 ?>
	 
	</head>

  <body class="<?php print $classes; ?>">
    
  <?php
  
    //print $language
    
    // admin stuff
    print $page_top;
    
    // rendered page content
    print $page;
    
    // all script tags
    print $scripts;
    
    // module/system close
    print $page_bottom;
  
  ?>
  
  </body>
</html>
