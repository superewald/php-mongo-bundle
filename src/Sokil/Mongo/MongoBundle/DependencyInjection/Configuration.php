<?php

namespace Sokil\Mongo\MongoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('mongo');
        $rootNode = $treeBuilder->root('mongo');

        $rootNode
            ->children()
                ->scalarNode('dsn')->end()
                ->arrayNode('map')
                    ->arrayPrototype()
                        ->arrayPrototype()
                            ->children()
                                ->scalarNode('class')->end()
                                ->scalarNode('documentClass')->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
