<?php 

  function sis_preprocess_html (&$vars) {
    
    $theme_path = drupal_get_path('theme', 'sis');
    
    // google fonts    
    drupal_add_css(
		    'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700|Merriweather:400,700,900,300'
	    , array('type' => 'external')
    );
    
    // JavaScript files
    drupal_add_js(
        'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'
      , 'external'
    );
    drupal_add_js($theme_path . '/js/jquery.cycle.min.js');
    drupal_add_js($theme_path . '/js/theme.js');
    
  }
  
  
  function sis_preprocess_page (&$vars) {
    
    $vars['content_col'] = "with-no-cols";
    
    if ($vars['page']['sidebar_first'] && !$vars['page']['sidebar_second']) {
      $vars['content_col'] = "with-left-col";
    }
    
    elseif ($vars['page']['sidebar_second'] && !$vars['page']['sidebar_first']) {
      $vars['content_col'] = 'with-right-col';
    }
    
    elseif ($vars['page']['sidebar_first'] && $vars['page']['sidebar_second']) {
      $vars['content_col'] = 'with-both-cols';
    }
    
    // template variables
    $vars['theme_path'] = drupal_get_path('theme', 'sis');
    
  }
  
  
  function sis_form_search_block_form_alter (&$form, &$form_state) {
    
    $form['search_block_form']['#attributes']['placeholder'] = t('Search everything');
    $form['actions']['submit'] = array(
        '#type' => 'image_button'
      , '#src' => base_path() . path_to_theme() . '/css/images/01header/iconSearch.png'
    );
    
  }
