<?php

use Clickfwd\Yoyo\View;
use Clickfwd\Yoyo\ViewProviders\YoyoViewProvider;
use Clickfwd\Yoyo\Yoyo;
use Illuminate\Container\Container;

$container = Container::getInstance();

$yoyo = new Yoyo($container);

$yoyo->configure([
  'url' => 'yoyo',
  'scriptsPath' => 'assets/js/',
  'namespace' => 'App\\Yoyo\\',
]);

$yoyo->registerViewProvider(function () {
    return new YoyoViewProvider(new View(__DIR__.'/resources/views/yoyo'));
});

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
    // 'counter' => App\Yoyo\Counter::class,
    // 'form' => App\Yoyo\Form::class,
    // 'pagination' => App\Yoyo\Pagination::class,
]);
