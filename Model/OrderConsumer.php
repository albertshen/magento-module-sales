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
     * @var string
     */
    private $event;

    /**
     * @param EventManagerInterface $eventManager
     * @param OrderInterface $order
     * @param string $event
     */
    public function __construct(
        EventManagerInterface $eventManager,
        OrderInterface $order,
        string $event
    ) {
        $this->eventManager = $eventManager;
        $this->order = $order;
        $this->event = $event;
    }

    /**
     * @param OrderQueueInterface $orderQueue
     * @return void
     * @throws \Exception
     */
    public function process(OrderQueueInterface $orderQueue): void
    {
        $order = $this->order->load($orderQueue->getOrderId());
        $this->eventManager->dispatch(
            $this->event,
            ['order' => $order]
        );

    }


}