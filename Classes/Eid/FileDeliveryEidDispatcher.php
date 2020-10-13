<?php

declare(strict_types=1);

namespace Bitmotion\SecureDownloads\Eid;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class FileDeliveryEidDispatcher
 */
class FileDeliveryEidDispatcher
{
    /**
     * @return void
     */
    public function start(): void
    {
        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            \Bitmotion\SecureDownloads\Resource\FileDelivery::class
        )->deliver();
    }
}

$fileDeliveryEidDispatcher = GeneralUtility::makeInstance(FileDeliveryEidDispatcher::class);
echo $fileDeliveryEidDispatcher->start();
