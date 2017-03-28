<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CatalogImportExport\Test\Constraint;

use Magento\Catalog\Test\Page\Adminhtml\CatalogProductIndex;
use Magento\Catalog\Test\Constraint\AssertProductInGrid;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Assert that entities are present in products grid.
 */
class AssertEntitiesInGrid extends AbstractConstraint
{
    /**
     * Assert that products are presents in products grid and can be found by sku, type, status and attribute set.
     *
     * @param CatalogProductIndex $productIndex
     * @param AssertProductInGrid $assertProductInGrid
     * @param array $entities
     * @return void
     */
    public function processAssert(
        CatalogProductIndex $productIndex,
        AssertProductInGrid $assertProductInGrid,
        array $entities
    ) {
        foreach ($entities as $entity) {
            $assertProductInGrid->processAssert($entity, $productIndex);
        }
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return 'Entities are presents in products grid.';
    }
}
