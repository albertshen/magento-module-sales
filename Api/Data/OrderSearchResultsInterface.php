<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sales\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for node search results.
 * @api
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface OrderSearchResultsInterface extends SearchResultsInterface
{

    /**
     * Get product list.
     *
     * @return \AlbertMage\Sales\Api\Data\OrderInterface[]
     */
    public function getItems();

    /**
     * Set product list.
     *
     * @param \AlbertMage\Sales\Api\Data\OrderInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
