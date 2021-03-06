<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Banner\Test\Block\Adminhtml\Promo\Catalog\Edit\Section;

use Magento\Ui\Test\Block\Adminhtml\Section;

/**
 * Class Banners
 * 'Related Banners' section on Cart Price Rule form
 */
class Banners extends Section
{
    /**
     * Banners grid locator
     *
     * @var string
     */
    protected $bannersGrid = '#related_catalogrule_banners_grid';

    /**
     * Get banners grid on Catalog Price Rules form
     *
     * @return \Magento\Banner\Test\Block\Adminhtml\Promo\Catalog\Edit\Section\BannersGrid
     */
    public function getBannersGrid()
    {
        return $this->blockFactory->create(
            'Magento\Banner\Test\Block\Adminhtml\Promo\Catalog\Edit\Section\BannersGrid',
            ['element' => $this->_rootElement->find($this->bannersGrid)]
        );
    }
}
