<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Api\Data;

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
     * @return string
     */
    public function getOrderId();

    /**
     * Set Increment Id
     *
     * @param string $orderId
     * @return $this
     */
    public function setOrderId($orderId);

}
