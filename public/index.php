<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

chmod('/var', 0777)

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
