<?php

namespace AlbertMage\Sales\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use AlbertMage\Sales\Api\Data\OrderQueueInterfaceFactory;
use Magento\Framework\MessageQueue\PublisherInterface;

class Order implements ObserverInterface
{

    /**
     * @var PublisherInterface
     */
    private $publisher;

    /**
     * @var OrderQueueInterfaceFactory
     */
    private $orderQueueInterfaceFactory;

    /**
     * @var string
     */
    private $queueTopic;

    /**
     * @param PublisherInterface $publisher
     * @param OrderQueueInterfaceFactory $orderQueueInterfaceFactory
     * @param string $queueTopic
     */
    public function __construct(
        PublisherInterface $publisher,
        OrderQueueInterfaceFactory $orderQueueInterfaceFactory,
        $queueTopic
    ) {
        $this->publisher = $publisher;
        $this->orderQueueInterfaceFactory = $orderQueueInterfaceFactory;
        $this->queueTopic = $queueTopic;
    }

    /**
     * @param Observer $observer
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(Observer $observer)
    {
        $orderQueue = $this->orderQueueInterfaceFactory->create();
        $order = $observer->getEvent()->getOrder();
        $orderQueue->setOrderId($order->getId());
        $this->publisher->publish($this->queueTopic, $orderQueue);
    }


}