<!doctype html>
<html lang="en">

	<head>
	  
	  <meta charset="utf-8">
	  
	  <title><?php print $head_title; ?></title>
	 
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
