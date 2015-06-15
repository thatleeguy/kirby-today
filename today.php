<?php

/**
 * A simple Kirby 2 tag to show the current day in your text.
 *
 * Example: Enjoy the rest of your (today:)!
 * Example: ENJOY THE REST OF YOUR (today: upper)!
 * Example: Enjoy the rest of your (today: lower)!
 *
 */

kirbytext::$tags['today'] = array(
  'html' => function($tag) {

    $today = date('N');
    $capitalize = $tag->attr('today');

    $days = array(
      '1' => l::get('monday'),
      '2' => l::get('tuesday'),
      '3' => l::get('wednesday'),
      '4' => l::get('thursday'),
      '5' => l::get('friday'),
      '6' => l::get('saterday'),
      '7' => l::get('sunday')
    );

    if ( $capitalize == 'upper' ) {
      return str::upper($days[$today]);
    } elseif ( $capitalize == 'lower' ) {
      return str::lower($days[$today]);
    } else {
      return $days[$today];
    }

  }
);