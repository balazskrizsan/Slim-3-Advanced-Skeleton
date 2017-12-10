<?php

use App\Controllers\Web\IndexController;
use App\Middlewares\SessionMiddleware;

$app->group(
    '',
    function ()
    {
        $this->get('/', IndexController\IndexAction::class);
        $this->get('/translation-demo', IndexController\TranslationDemoAction::class);
        $this->get('/session-demo', IndexController\SessionDemoAction::class);
    }
)
    ->add(new SessionMiddleware());
