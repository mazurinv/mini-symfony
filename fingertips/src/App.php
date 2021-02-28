<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpKernel;

class App extends HttpKernel
{
    public function __construct()
    {
        parent::__construct(new EventDispatcher(), new ControllerResolver(), new RequestStack(), new ArgumentResolver());
    }
}
