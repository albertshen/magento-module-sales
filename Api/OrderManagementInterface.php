<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sales\Api;

/**
 * Interface OrderManagement
 * @api
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface OrderManagementInterface
{

    /**
     * Get order list from system order
     *
     * @param int $customerId
     * @param string $status
     * @param int $page
     * @param int $pageSize
     * @return \AlbertMage\Sales\Api\Data\OrderSearchResultsInterface
     */
    public function getList($customerId, $status = 'all', $page = 1, $pageSize = 10);

    /**
     * Get order detail from system order
     *
     * @param int $id
     * @return \AlbertMage\Sales\Api\Data\OrderInterface
     */
    public function getOrderDetail($id);
}
