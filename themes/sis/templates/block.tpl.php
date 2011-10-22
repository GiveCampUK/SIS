<?php if ($block->region == 'slideshow') : ?>
  
  <div class="home-page-slide">
  
    <h2 class="welcome-ribbon">
    	<span class="left-edge"></span>
    	<?php print $block->subject; ?>
    	<span class="tail"></span>
    </h2>
    
    <div class="slide-image">
      <?php print $content; ?>
    </div>
  
  </div>
  
<?php elseif ($block->region == 'header_box_left' || 
							$block->region == 'header_box_middle' ||
							$block->region == 'header_box_right' ) : ?>
      
    <?php print $content; ?>
    
<?php else : ?>

  <?php if ($block->subject) : ?>
    
    <h2><?php print $block->subject; ?></h2>
  
  <?php endif; ?>
  
  <?php print $content; ?>

<?php endif; ?>