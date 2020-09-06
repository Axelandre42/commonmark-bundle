<?php

namespace Avensome\CommonMarkBundle\DependencyInjection\Compiler;

use Avensome\CommonMarkBundle\EnvironmentFactory;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class CommonMarkExtensionPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $containerBuilder)
    {
        if (!$containerBuilder->has(EnvironmentFactory::class)) {
            return;
        }

        $taggedServices = $containerBuilder->findTaggedServiceIds('avensome_commonmark.extension', true);

        $registryDefinition = $containerBuilder->findDefinition(EnvironmentFactory::class);
        $registryDefinition->addArgument([]);
        foreach ($taggedServices as $id => $tag) {
            $registryDefinition->getArgument(0)[] = new Reference($id);
        }
    }
}
