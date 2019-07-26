<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\AdobeStockAsset\Model;

use Magento\AdobeStockAsset\Model\ResourceModel\Category as CategoryResourceModel;
use Magento\AdobeStockAssetApi\Api\Data\CategoryExtensionInterface;
use Magento\AdobeStockAssetApi\Api\Data\CategoryInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

/**
 * Adobe Stock Asset Category
 */
class Category extends AbstractExtensibleModel implements CategoryInterface
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(CategoryResourceModel::class);
    }

    /**
     * @inheritdoc
     */
    public function getId(): ?int
    {
        $id = $this->getData(self::ID);

        if (!$id) {
            return null;
        }

        return (int) $id;
    }

    /**
     * @inheritdoc
     */
    public function setId($value): void
    {
        $this->setData(self::ID, $value);
    }

    /**
     * @inheritdoc
     */
    public function getAdobeId(): int
    {
        return (int) $this->getData(self::ADOBE_ID);
    }

    /**
     * @inheritdoc
     */
    public function setAdobeId(int $value): void
    {
        $this->setData(self::ADOBE_ID, $value);
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return (string) $this->getData(self::NAME);
    }

    /**
     * @inheritdoc
     */
    public function setName(string $value): void
    {
        $this->setData(self::NAME, $value);
    }

    /**
     * @inheritdoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inheritdoc
     */
    public function setExtensionAttributes(CategoryExtensionInterface $extensionAttributes): void
    {
        $this->_setExtensionAttributes($extensionAttributes);
    }
}
