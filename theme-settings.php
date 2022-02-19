<?php
/**
 * @file
 * Theme settings file for My Theme.
 */

$form['dark_mode'] = array(
  '#type' => 'checkbox',
  '#title' => t('Enable dark mode'),
  '#default_value' => theme_get_setting('dark_mode', 'my_theme'),
);
