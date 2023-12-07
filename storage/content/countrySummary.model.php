<?php
 return [
  'name' => 'countrySummary',
  'label' => 'Country Summary',
  'info' => '',
  'type' => 'collection',
  'fields' => [
    0 => [
      'name' => 'iso3',
      'type' => 'text',
      'label' => '',
      'info' => '',
      'group' => '',
      'i18n' => true,
      'required' => true,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'multiline' => false,
        'showCount' => true,
        'readonly' => false,
        'placeholder' => NULL,
        'minlength' => NULL,
        'maxlength' => NULL,
        'list' => NULL,
      ],
    ],
    1 => [
      'name' => 'summary',
      'type' => 'code',
      'label' => '',
      'info' => '',
      'group' => '',
      'i18n' => true,
      'required' => true,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'mode' => NULL,
        'height' => NULL,
      ],
    ],
  ],
  'preview' => [
  ],
  'group' => 'Summaries',
  'meta' => NULL,
  '_created' => 1701792358,
  '_modified' => 1701792463,
  'color' => NULL,
  'revisions' => false,
];