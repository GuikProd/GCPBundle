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

use Google\Cloud\Translate\TranslateClient;
use GuikProd\GCPBundle\Bridge\Interfaces\CloudTranslationBridgeInterface;

/**
 * Class CloudTranslationBridge.
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class CloudTranslationBridge implements CloudTranslationBridgeInterface
{
    /**
     * @var string
     */
    private $keyFileName;

    /**
     * @var string
     */
    private $keyFilePath;

    /**
     * {@inheritdoc}
     */
    public function __construct(
        string $keyFilePath,
        string $keyFileName
    ) {
        $this->keyFileName = $keyFileName;
        $this->keyFilePath = $keyFilePath;
    }

    /**
     * {@inheritdoc}
     */
    public function getTranslationClient():? TranslateClient
    {
        return new TranslateClient([
            'keyFilePath' => $this->keyFilePath,
            'keyFile' => file_get_contents(json_decode($this->keyFilePath.$this->keyFileName), true)
        ]);
    }
}
