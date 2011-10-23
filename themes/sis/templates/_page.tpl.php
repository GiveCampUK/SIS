<?php
/**
 * 
 */ 
?>
<link rel="stylesheet/less" type="text/css" href="<?php print $theme_path; ?>/css/less/sis-style.less">
<script src="<?php print $theme_path; ?>/js/less.js" type="text/javascript"></script>

<div class="mainWrapper">
	<div id="all-content">
	  
	  <header id="main-site-header" class="main-layout-area clearfix">
	    
	    <?php if($is_front) : ?>
	      <h1 id="site-logo">Sussex Interpreting Service</h1>
	    <?php else : ?>
	      <div id="site-logo">Sussex Interpreting Service</div>
	    <?php endif; ?>
	    
	    <?php if ($page['top_tab']) {
	      print render($page['top_tab']); 
	    } ?>
	        
	    <section id="header-boxes">
	    	
	    	<?php if ($page["header_box_left"]) : ?>
		    	<div class="headerBoxOne header-box">
				    <?php print render($page['header_box_left']); ?>	
		    	</div>
	    	<?php endif ; ?>
	   
	     	<?php if ($page["header_box_middle"]) : ?>
		    	<div class="headerBoxTwo header-box">
				    <?php print render($page['header_box_middle']); ?>	
		    	</div>
	    	<?php endif ; ?> 	
	
	     	<?php if ($page["header_box_right"]) : ?>
		    	<div class="headerBoxThree header-box">
				    <?php print render($page['header_box_right']); ?>	
		    	</div>
	    	<?php endif ; ?> 	
	     
	    </section>      
	    
	  </header>
	  
	  
	  <?php if ($main_menu): ?>
	  
	    <nav id="main-menu" class="clearfix" role="navigation">
	    	<span class="ribbon-edge left"></span>
	      
		      <?php print theme('links__system_main_menu', array(
		        'links' => $main_menu,
		        'attributes' => array(
		          'id' => 'main-menu-links',
		          'class' => 'clearfix'
		        )
		      )); ?>
		      
	        <span class="ribbon-edge right"></span>
	    </nav>
	    
	  <?php endif; ?>
	  
	  
	  <div id="main-page-wrapper" class="main-layout-area">
	    
	    <?php if ($messages): ?>
	      <div id="messages">
	        <?php print $messages; ?>
	      </div>
	    <?php endif; ?>
	  
	    <?php if ($is_front) : ?>
	        
	      <section id="home-page-banner-wrap">
	        
	        <?php print render($page['slideshow']); ?>
	        
	        <?php print render($page['home_page_banner']); ?>
	
	      </section>
	        
	      <?php print render($page['home_page_welcome']); ?>
	      
	      <?php print render($page['home_page_testamonial']); ?>
	       
	    <?php else : ?>
	      
	      
		  <?php if ($breadcrumb): ?>
		    <div id="breadcrumb-container"><?php print $breadcrumb; ?></div>
		  <?php endif; ?>
		  
		  <!-- Main Content Container -->
		  <div id="main-content-container">
		  
		  <!-- Generate the left hand sidebar, if it exists -->
		  <?php if ($page['sidebar_first']): ?>
		  
		    <aside class="main-sidebar first-side">
		      
		      <?php print render($page['sidebar_first']); ?>
		      
		    </aside>
		    
		  <?php endif; ?>
		  
		  <!-- Generate the right hand sidebar, if it exists -->
		  <?php if ($page['sidebar_second']): ?>
		    
		    <aside class="main-sidebar second-side">
		      
		      <?php print render($page['sidebar_second']); ?>
		      
		    </aside>
		    
		  <?php endif; ?>
	      
	    <!-- Generate the main sidebar, if it exists -->
	    <section class="main-content-section">
	      
	      <article class="main-content-article <?php print $content_col; ?>">
	        
	        <?php if ($tabs): ?>
	          <div class="tabs">
	            <?php print render($tabs); ?>
	          </div>
	        <?php endif; ?>
	        
	        <?php print render($page['help']); ?>
	        
	        <h2 class="main-headline"><?php print $title; ?></h2>
	        
	        <?php print render($title_suffix); ?>
	        
	        <?php if ($action_links): ?>
	          <ul class="action-links">
	            <?php print render($action_links); ?>
	          </ul>
	        <?php endif; ?>
	        
	        <?php print render($page['content']); ?>
	        
	        <?php print $feed_icons; ?>
	        
	      </article>
	      
	     </section> 
	   
	    <?php endif; ?>
	    
	    </div>
	    <!-- End main-content-container -->
	  
	  </div>
	  
	  
	  <footer id="main-site-footer" class="main-layout-area">
	    
	    <ul class="socialLinks">
	    	<li class="facebook"><a href="#"></a></li>
	    	<li class="twitter"><a href="#"></a></li>
	    	<li class="youTube"><a href="#"></a></li>
	    </ul>
	    
	    <p>
	    	Sussex Interpreting Services &copy; 2011
	    </p>
	    
	  </footer>
	
	</div>
	
	<div id="bottomShadow">
	</div>
</div>