<?php

namespace AlbertMage\Sales\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Sales\Api\OrderManagementInterface;

class OrderExpireNotice implements ObserverInterface
{

    /**
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
     * @param Observer $observer
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(Observer $observer)
    {
        $this->orderManagement->cancel($observer->getOrder()->getOrderId());
    }


}