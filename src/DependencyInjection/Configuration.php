<?php

namespace Avensome\CommonMarkBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('avensome_commonmark');
        $rootNode = $treeBuilder->getRootNode();

        //@formatter:off
        $rootNode
            ->children()
                ->variableNode('converter_config')
                    ->defaultValue(['html_input' => 'escape'])
                ->end()
            ->end();
        //@formatter:on

        return $treeBuilder;
    }
}
