<?php

/**
 * @file
 * Display Suite 2 column stacked template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-stacked-sidebar <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  
  <?php if (!empty($header)):?>
    <<?php print $header_wrapper ?> class="stacked-sidebar-header <?php print $header_classes; ?>">
      <?php print $header; ?>
    </<?php print $header_wrapper ?>>
  <?php endif; ?>
  
  <div class="stacked-sidebar-body-full stacked-sidebar-col">
  <?php if (!empty($body_top)):?>
    <<?php print $body_top_wrapper ?> class="stacked-sidebar-body-top <?php print $body_top_classes; ?>">
      <?php print $body_top; ?>
    </<?php print $body_top_wrapper ?>>
  <?php endif; ?>
  
  <?php if (!empty($body_middle)):?>
    <<?php print $body_middle_wrapper ?> class="stacked-sidebar-body-middle <?php print $body_middle_classes; ?>">
      <?php print $body_middle; ?>
    </<?php print $body_middle_wrapper ?>>
  <?php endif; ?>
  
  <?php if (!empty($body_bottom)):?>
    <<?php print $body_bottom_wrapper ?> class="stacked-sidebar-body-bottom <?php print $body_bottom_classes; ?>">
      <?php print $body_bottom; ?>
    </<?php print $body_bottom_wrapper ?>>
  <?php endif; ?>
  </div>
    
  <div class="stacked-sidebar-sidebar-full stacked-sidebar-col">
  <?php if (!empty($sidebar)):?>
    <<?php print $sidebar_wrapper ?> class="stacked-sidebar-sidebar <?php print $sidebar_classes; ?>">
      <?php print $sidebar; ?>
    </<?php print $sidebar_wrapper ?>>
  <?php endif; ?>
  </div>
  
  <?php if (!empty($footer)):?>
    <<?php print $footer_wrapper ?> class="stacked-sidebar-footer <?php print $footer_classes; ?>">
      <?php print $footer; ?>
    </<?php print $footer_wrapper ?>>
  <?php endif; ?>
  
</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>