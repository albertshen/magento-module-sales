<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Sales\Model;

use AlbertMage\Sales\Api\Data\OrderQueueInterface;
use Magento\Framework\Model\AbstractModel;

class OrderQueue extends AbstractModel implements OrderQueueInterface
{
    /**
     * @inheritDoc
     */
    public function getOrderId()
    {
        return $this->getData(self::ORDER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setOrderId($orderId)
    {
        $this->setData(self::ORDER_ID, $orderId);
        return $this;
    }
}