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

namespace GuikProd\GCPBundle\CloudTranslation\Interfaces;

use GuikProd\GCPBundle\Bridge\Interfaces\CloudTranslationBridgeInterface;

/**
 * Interface CloudTranslationWarmerInterface.
 * 
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
interface CloudTranslationWarmerInterface
{
    /**
     * CloudTranslationWarmerInterface constructor.
     *
     * @param CloudTranslationBridgeInterface  $cloudTranslationBridge
     */
    public function __construct(CloudTranslationBridgeInterface $cloudTranslationBridge);

    /**
     * @param string  $textToTranslate  The text to translate.
     * @param string  $targetLocale     The locale used to translate the text.
     *
     * @return array|null               The text translated (stored in $array['text'].
     */
    public function warmTranslation(string $textToTranslate, string $targetLocale):? array;
}
