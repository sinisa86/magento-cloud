<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/** @var $product \Magento\Catalog\Model\Product */
$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Product');
$product->setTypeId(
    \Magento\GiftCard\Model\Catalog\Product\Type\Giftcard::TYPE_GIFTCARD
)->setAttributeSetId(
    4
)->setWebsiteIds(
    [1]
)->setName(
    'Gift Card'
)->setSku(
    'gift-card-with-allowed-messages'
)->setPrice(
    10
)->setDescription(
    'Gift Card Description'
)->setMetaTitle(
    'Gift Card Meta Title'
)->setMetaKeyword(
    'Gift Card Meta Keyword'
)->setMetaDescription(
    'Gift Card Meta Description'
)->setVisibility(
    \Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH
)->setStatus(
    \Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED
)->setCategoryIds(
    [2]
)->setStockData(
    ['use_config_manage_stock' => 0]
)->setCanSaveCustomOptions(
    true
)->setHasOptions(
    true
)->setAllowOpenAmount(
    1
)->setUseConfigAllowMessage(
    1
)->save();
