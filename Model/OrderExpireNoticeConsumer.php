<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Sales\Model;

use Magento\Sales\Api\Data\OrderInterface,
use Magento\Framework\Event\ManagerInterface as EventManagerInterface;
use AlbertMage\Notification\Api\Data\QueueMessageInterface;

class OrderExpireNoticeConsumer
{

    /**
     * Application Event Dispatcher
     *
     * @var EventManagerInterface
     */
    private $eventManager;

    /**
     * @var PublisherInterface
     */
    private $publisher;

    /**
     * @var OrderInterface $order,
     */
    private $order;

    /**
     * @param EventManagerInterface $eventManager
     * @param PublisherInterface $publisher
     * @param OrderInterface $order
     */
    public function __construct(
        PublisherInterface $publisher,
        OrderInterface $order
    ) {
        $this->eventManager = $eventManager;
        $this->publisher = $publisher;
        $this->order = $order;
    }

    /**
     * @param QueueMessageInterface $queueMessage
     * @return void
     * @throws \Exception
     */
    public function process(QueueMessageInterface $queueMessage): void
    {
        $order = $this->order->load($queueMessage->getOrderId());
        $this->publisher->publish('dle.order.cancel', $queueMessage);
        $this->eventManager->dispatch(
            'order_expire_notice',
            ['order' => $order]
        );

    }


}