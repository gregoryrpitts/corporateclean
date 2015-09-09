<section id="front-page-header">
    <div class="front-page-header">
        <h1 style="display:block">
            <img id="San Diego Athletics Logo" width="300" src="http://www.sandiegoathletics.com/sites/default/files/images/San-Diego-Athletics-Logo-White.png" alt="San Diego Athletics | CrossFit Pacific Beach Logo">
        </h1>           
        <h1 id="test" style="display:block">
            <img width="300" src="http://www.sandiegoathletics.com/sites/default/files/images/San-Diego-Athletics-Name-White.png" alt="San Diego Athletics | CrossFit Pacific Beach Name">
        </h1>
        <p style="text-align:center; color:white">
            1019 Garnet Avenue
            </br>
            San Diego, CA 92109
            </br>
            858.246.7357
            </br>
            info@sandiegoathletics.com
            </p>
            <a href="facility/getstarted">
                <p class="front-page-getting-started-button">
                    Get Started Now
                </p>
            </a>
    </div>
</section>

<!-- #header-menu -->
<div id="header-menu">
	<!-- #header-menu-inside -->
    <div id="header-menu-inside" class="container_12 clearfix">
    
    	<div class="grid_12">
            <div id="navigation" class="clearfix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            <?php else :
            if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            }
            print drupal_render($main_menu_tree);
            endif; ?>
            </div>
        </div>
        
    </div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->

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

<section id="front-page-constant-contact">
    <div class="front-page-constant-contact">
        <h2>
            Sign up for our mailing list to get article updates and more!
        </h2>
        
        <?php if ($page['help']): ?>
        <div id="help">
        <?php print render($page['help']); ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- #footer -->    
<div id="footer" class="front-page-footer">
	<!-- #footer-inside -->
    <div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_12">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- #footer-bottom -->    
<div id="footer-bottom">

	<!-- #footer-bottom-inside --> 
    <div id="footer-bottom-inside" class="container_12 clearfix">
    	<!-- #footer-bottom-left --> 
    	<div id="footer-bottom-left" class="grid_12">
            
            <?php print render($page['footer']); ?>
            
            <p style="text-align:center">© 2015 San Diego Athletics</p>
            
        </div>
    </div><!-- EOF: #footer-bottom-inside -->

</div><!-- EOF: #footer -->
