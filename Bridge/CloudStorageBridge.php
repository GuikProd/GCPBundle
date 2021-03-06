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

use GuikProd\GCPBundle\Bridge\Interfaces\CloudStorageBridgeInterface;

/**
 * Class CloudStorageBridge.
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class CloudStorageBridge implements CloudStorageBridgeInterface
{
    /**
     * @var string
     */
    private $bucketCredentialsFolder;

    /**
     * CloudStorageBridge constructor.
     *
     * @param string $bucketCredentialsFolder
     */
    public function __construct(string $bucketCredentialsFolder)
    {
        $this->bucketCredentialsFolder = $bucketCredentialsFolder;
    }
}
