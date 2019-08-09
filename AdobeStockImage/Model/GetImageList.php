<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\AdobeStockImage\Model;

use Magento\AdobeStockAssetApi\Api\GetAssetListInterface;
use Magento\AdobeStockImageApi\Api\GetImageListInterface;
use Magento\AdobeStockAssetApi\Api\Data\AssetSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Class GetImageList
 */
class GetImageList implements GetImageListInterface
{
    /**
     * @var GetAssetListInterface
     */
    private $assetList;

    /**
     * GetImageList constructor.
     * @param GetAssetListInterface $assetList
     */
    public function __construct(
        GetAssetListInterface $assetList
    ) {
        $this->assetList = $assetList;
    }

    /**
     * @inheritdoc
     */
    public function execute(SearchCriteriaInterface $searchCriteria): AssetSearchResultsInterface
    {
        return $this->assetList->execute($searchCriteria);
    }
}
