<?php

declare(strict_types=1);

/*
 * This file is part of the GuikProdGCPBundle project.
 *
 * (c) Guillaume Loulier <contact@guillaumeloulier.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuikProd\GCPBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('guikprod_gcp');

        $rootNode
            ->children()
                ->arrayNode('storage')
                    ->children()
                        ->scalarNode('path')->end()
                        ->scalarNode('filename')->end()
                    ->end()
                    ->canBeDisabled()
                ->end()
                ->arrayNode('translation')
                    ->children()
                        ->scalarNode('path')->end()
                        ->scalarNode('filename')->end()
                    ->end()
                    ->canBeDisabled()
                ->end()
                ->arrayNode('vision')
                    ->children()
                        ->scalarNode('path')->end()
                        ->scalarNode('filename')->end()
                        ->scalarNode('detection_mode')
                            ->info('Determine the detection mode for the Vision call')
                            ->defaultValue('label_detection')
                        ->end()
                    ->end()
                    ->canBeDisabled()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
