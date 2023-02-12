<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Sales\Model;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Framework\Event\ManagerInterface as EventManagerInterface;
use AlbertMage\Sales\Api\Data\OrderQueueInterface;

class OrderConsumer
{

    /**
     * Application Event Dispatcher
     *
     * @var EventManagerInterface
     */
    private $eventManager;

    /**
     * @var OrderInterface
     */
    private $order;


    /**
     * @param EventManagerInterface $eventManager
     * @param OrderInterface $order
     */
    public function __construct(
        EventManagerInterface $eventManager,
        OrderInterface $order
    ) {
        $this->eventManager = $eventManager;
        $this->order = $order;
    }

    /**
     * @param OrderQueueInterface $orderQueue
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function process(OrderQueueInterface $orderQueue): void
    {
        if (!static::EVENT_NAME) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('Event name must be needed.')
            );
        }
        $order = $this->order->load($orderQueue->getOrderId());
        $this->eventManager->dispatch(
            static::EVENT_NAME,
            ['order' => $order]
        );

    }


}