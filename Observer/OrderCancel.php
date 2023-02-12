<?php

namespace AlbertMage\Sales\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Sales\Api\OrderManagementInterface;
use Magento\Framework\Event\ManagerInterface as EventManagerInterface;

class OrderCancel implements ObserverInterface
{

    /**
     * @var OrderManagementInterface
     */
    protected $orderManagement;

    /**
     * @var EventManagerInterface
     */
    private $eventManager;

    /**
     * @param OrderManagementInterface $orderManagement
     * @param EventManagerInterface $eventManager
     */
    public function __construct(
        OrderManagementInterface $orderManagement,
        EventManagerInterface $eventManager
    ) {
        $this->orderManagement = $orderManagement;
        $this->eventManager = $eventManager;
    }

    /**
     * @param Observer $observer
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(Observer $observer)
    {
        $order = $observer->getOrder();
        $this->orderManagement->cancel($order->getId());
        $this->eventManager->dispatch(
            'order_cancel_consume_after',
            ['order' => $order]
        );
    }


}