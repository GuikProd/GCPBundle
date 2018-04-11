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

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class GuikProdGCPExtension.
 * 
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class GuikProdGCPExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);
        
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return 'guikprod_gcp';
    }
}
