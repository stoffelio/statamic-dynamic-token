<?php

namespace Webographen\DynamicToken;

use Webographen\DynamicToken\Tags\DynamicToken;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'web' => __DIR__.'/../routes/web.php',
    ];

    protected $tags = [
        DynamicToken::class,
    ];
}