<?php

namespace Avensome\CommonMarkBundle;

use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;

class ConverterFactory
{
    public function __invoke(Environment $environment, array $config)
    {
        return new CommonMarkConverter($config, $environment);
    }
}
