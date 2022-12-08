<?php

namespace AlbertMage\Sales\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use AlbertMage\Sales\Api\Data\QueueMessageInterfaceFactory;
use Magento\Framework\MessageQueue\PublisherInterface;

class OrderExpireNotice implements ObserverInterface
{

    /**
     * @var PublisherInterface
     */
    private $publisher;

    /**
     * @var QueueMessageInterfaceFactory
     */
    private $queueMessageFactory;

    /**
     * @param PublisherInterface $publisher
     */
    public function __construct(
        PublisherInterface $publisher,
        QueueMessageInterfaceFactory $queueMessageFactory
    ) {
        $this->publisher = $publisher;
        $this->queueMessageFactory = $queueMessageFactory;
    }

    /**
     * @param Observer $observer
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(Observer $observer)
    {
        $queueMessage = $this->queueMessageFactory->create();
        $order = $observer->getEvent()->getOrder();
        $queueMessage->setOrderId($order->getId());
        $this->publisher->publish('dle.order.create', $queueMessage);
    }


}