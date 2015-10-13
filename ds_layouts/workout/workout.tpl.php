<?php

/**
 * @file
 * Display Suite 2 column stacked template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-workout-all <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $title_wrapper ?> class="workout-title <?php print $title_classes; ?>">
    <?php print $title; ?>
  </<?php print $title_wrapper ?>>

  <<?php print $announcements_wrapper ?> class="workout-announcements <?php print $announcements_classes; ?>">
    <?php print $announcements; ?>
  </<?php print $announcements_wrapper ?>>

  <<?php print $fitness_wrapper ?> class="workout-fitness <?php print $fitness_classes; ?>">
    <?php print $fitness; ?>
  </<?php print $fitness_wrapper ?>>
  
  <<?php print $crossFit_wrapper ?> class="workout-crossFit <?php print $crossFit_classes; ?>">
    <?php print $crossFit; ?>
  </<?php print $crossFit_wrapper ?>>
  
  <<?php print $bodybuilding_wrapper ?> class="workout-bodybuilding <?php print $bodybuilding_classes; ?>">
    <?php print $bodybuilding; ?>
  </<?php print $bodybuilding_wrapper ?>>
  
  <<?php print $olympic_wrapper ?> class="workout-olympic <?php print $olympic_classes; ?>">
    <?php print $olympic; ?>
  </<?php print $olympic_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
