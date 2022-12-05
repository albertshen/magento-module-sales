<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Sales\Model;

use AlbertMage\Notification\Api\Data\QueueMessageInterface;
use Magento\Sales\Api\OrderManagementInterface;

class OrderCancelConsumer
{
    
    /**
     *
     * @var OrderManagementInterface
     */
    protected $orderManagement;

    /**
     * @param OrderManagementInterface $orderManagement
     */
    public function __construct(
        OrderManagementInterface $orderManagement
    ) {
        $this->orderManagement = $orderManagement;
    }

    /**
     * @param QueueMessageInterface $queueMessage
     * @return void
     * @throws \Exception
     */
    public function process(QueueMessageInterface $queueMessage): void
    {
        $this->orderManagement->cancel($queueMessage->getOrderId());
    }


}