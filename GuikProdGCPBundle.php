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

namespace GuikProd\GCPBundle;

use GuikProd\GCPBundle\DependencyInjection\GuikProdGCPExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class GuikProdGCPBundle.
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class GuikProdGCPBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (!$this->extension instanceof ExtensionInterface) {
            $this->extension = new GuikProdGCPExtension();
        }

        return $this->extension;
    }
}
