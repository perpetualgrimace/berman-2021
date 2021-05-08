<?php

@include __DIR__ . DS . 'credentials.php';

return [
  'debug' => false,
  'cache' => true,
  'cache.driver' => 'memcached',
  'cache.ignore' => [
    'search',
    'sitemap'
  ],
  'cachebuster' => 'true'
];
