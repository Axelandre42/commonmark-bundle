<?php

namespace Avensome\CommonMarkBundle;

use League\CommonMark\Environment;

class EnvironmentFactory
{

    public function __invoke(array $extensions)
    {
        $environment = Environment::createCommonMarkEnvironment();
        foreach ($extensions as $extension) {
            $environment->addExtension($extension);
        }
        return $environment;
    }
}
