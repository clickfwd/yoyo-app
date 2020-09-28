<?php

use Clickfwd\Yoyo\View;
use Clickfwd\Yoyo\ViewProviders\YoyoViewProvider;
use Clickfwd\Yoyo\Yoyo;

$yoyo = new Yoyo();

$yoyo->configure([
  'url' => 'yoyo',
  'scriptsPath' => 'app/resources/assets/js/',
  'namespace' => 'App\\Yoyo\\',
]);

$view = new YoyoViewProvider(new View(__DIR__.'/resources/views/yoyo'));

$yoyo->setViewProvider($view);

$yoyo->registerComponents([
    // If anonymous component name matches template name, no need to register

    // 'wishlist',
    // 'wishlist-counter',
    // 'nesting-parent',
    // 'dynamic-content',
    // 'polling',

    // If dynamic component classes are autoloaded with the right namespace, no need to register

    // 'live-search' => App\Yoyo\LiveSearch::class,
    // 'load-more' => App\Yoyo\LoadMore::class,
    'load-more-two' => App\Yoyo\LoadMore::class,
    // 'counter' => App\Yoyo\Counter::class,
    // 'form' => App\Yoyo\Form::class,
    // 'pagination' => App\Yoyo\Pagination::class,
]);
