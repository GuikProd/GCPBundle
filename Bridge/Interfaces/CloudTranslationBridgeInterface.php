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

namespace GuikProd\GCPBundle\Bridge\Interfaces;

use Google\Cloud\Translate\TranslateClient;

/**
 * Interface CloudTranslationBridgeInterface.
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
interface CloudTranslationBridgeInterface
{
    /**
     * CloudTranslationBridgeInterface constructor.
     *
     * @param string  $keyFilePath  The path where is stored the credentials file.
     * @param string  $keyFileName  The name of the credentials file.
     */
    public function __construct(
        string $keyFilePath,
        string $keyFileName
    );

    /**
     * @return TranslateClient|null
     */
    public function getTranslationClient():? TranslateClient;
}
