<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sales\Api\Data;

/**
 * QueueMessage Interface
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface QueueMessageInterface
{

    const ORDER_ID = 'order_id';

    /**
     * Get order Id
     *
     * @return int
     */
    public function getOrderId();

    /**
     * Set Increment Id
     *
     * @param int $orderId
     * @return $this
     */
    public function setOrderId($orderId);

}
