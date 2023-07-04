<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
declare(strict_types=1);

namespace AlbertMage\Sales\Model;

use AlbertMage\Sales\Api\Data\OrderSearchResultsInterface;
use Magento\Framework\Api\SearchResults;

/**
 * Service Data Object with order item search results.
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class OrderSearchResults extends SearchResults implements OrderSearchResultsInterface
{
}
