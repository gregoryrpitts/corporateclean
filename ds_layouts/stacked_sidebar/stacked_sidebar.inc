<?php

/**
 * @file
 * Views hooks file.
 */

  // Fuction name is ds_LAYOUT_KEY
function ds_stacked_sidebar() {
    return array(
      'label' => t('Stacked Sidebar'),
      'regions' => array(
        'header' => t('Header'),
        'body_top' => t('Body Top'),
        'body_middle' => t('Body Middle'),
        'body_bottom' => t('Body Bottom'),
        'sidebar' => t('Sidebar'),
        'footer' => t('Footer'),
      ),
      // Add this if there is a default css file.
      'css' => TRUE,
      // Add this if there is a default preview image
      'image' => TRUE,
    );
  }