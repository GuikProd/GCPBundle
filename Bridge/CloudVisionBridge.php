<?php

declare(strict_types=1);

/*
 * This file is part of the MarketReminder project.
 *
 * (c) Guillaume Loulier <contact@guillaumeloulier.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuikProd\GCPBundle\Bridge;

use GuikProd\GCPBundle\Bridge\Interfaces\CloudVisionBridgeInterface;

/**
 * Class CloudVisionBridge.
 * 
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class CloudVisionBridge implements CloudVisionBridgeInterface
{
    /**
     * @var string
     */
    private $visionCredentialsFolder;

    /**
     * CloudVisionBridge constructor.
     *
     * @param string $visionCredentialsFolder
     */
    public function __construct(string $visionCredentialsFolder)
    {
        $this->visionCredentialsFolder = $visionCredentialsFolder;
    }
}
