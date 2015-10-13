<?php

/**
 * @file
 * Views hooks file.
 */

  // Fuction name is ds_LAYOUT_KEY
function ds_workout() {
    return array(
      'label' => t('Workout'),
      'regions' => array(
        'title' => t('Title'),
        'announcements' => t('Announcements'),
        'fitness' => t('Fitness'),
        'crossFit' => t('CrossFit'),
        'bodybuilding' => t('Bodybuilding'),
        'olympic' => t('Olympic Weightlifting'),
      ),
      // Add this if there is a default css file.
      'css' => TRUE,
      // Add this if there is a default preview image
      'image' => TRUE,
    );
  }