<section id="front-page-header">
    <div class="front-page-row">
        <h1 style="display:block">
            <img id="test" width="400" src="sites/default/files/images/San-Diego-Athletics-Logo-White.png" alt="Logo">
        </h1>           
        <h1 id="test" style="display:block">
            <img width="400" src="sites/default/files/images/San-Diego-Athletics-Name-White.png" alt="Logo">
        </h1>
        <p>
            1019 Garnet Avenue
            </br>
            San Diego, CA 92109
            </p>
            
    </div>
</section>


<!-- #content -->
<div id="content" class="front-page-content">
	<!-- #content-inside -->
    <div id="content-inside" class="container_12 clearfix">
        
            <div id="main" class="grid_12">    
        
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php print $feed_icons; ?>
            
        </div><!-- EOF: #main -->

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- #footer -->    
<div id="footer">
	<!-- #footer-inside -->
    <div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_4">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- #footer-bottom -->    
<div id="footer-bottom">

	<!-- #footer-bottom-inside --> 
    <div id="footer-bottom-inside" class="container_12 clearfix">
    	<!-- #footer-bottom-left --> 
    	<div id="footer-bottom-left" class="grid_8">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
    	<!-- #footer-bottom-right --> 
        <div id="footer-bottom-right" class="grid_4">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->

</div><!-- EOF: #footer -->