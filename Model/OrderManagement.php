<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sales\Model;

use AlbertMage\Sales\Api\Data\OrderInterfaceFactory;
use AlbertMage\Sales\Api\Data\OrderItemInterfaceFactory;
use AlbertMage\Sales\Api\Data\OrderSearchResultsInterfaceFactory;
use AlbertMage\Catalog\Model\ProductManagement;
use AlbertMage\Sales\Api\Data\OrderAddressInterfaceFactory;
use Magento\Framework\Api\SearchCriteriaFactory;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\ResourceModel\Order\Collection as OrderCollection;

/**
 * Class OrderManagement
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class OrderManagement implements \AlbertMage\Sales\Api\OrderManagementInterface
{

    /**
     * @var OrderInterfaceFactory
     */
    protected $orderInterfaceFactory;

    /**
     * @var OrderItemInterfaceFactory
     */
    protected $orderItemInterfaceFactory;

    /**
     * @var OrderSearchResultsInterfaceFactory
     */
    protected $orderSearchResultsFactory;

    /**
     * @var SearchCriteriaFactory
     */
    protected $searchCriteriaFactory;

    /**
     * @var ProductManagement
     */
    protected $productManagement;

    /**
     * @var OrderAddressInterfaceFactory
     */
    protected $orderAddressInterfaceFactory;

    /**
     * @var OrderInterface
     */
    protected $order;

    /**
     * @var OrderCollection
     */
    protected $orderCollection;

    /**
     * @param OrderInterfaceFactory $orderInterfaceFactory
     * @param OrderItemInterfaceFactory $orderItemInterfaceFactory
     * @param OrderSearchResultsInterfaceFactory $orderSearchResultsFactory
     * @param SearchCriteriaFactory $searchCriteriaFactory
     * @param ProductManagement $productManagement
     * @param OrderAddressInterfaceFactory $orderAddressInterfaceFactory
     * @param OrderInterface $order
     * @param OrderCollection $orderCollection
     */
    public function __construct(
        OrderInterfaceFactory $orderInterfaceFactory,
        OrderItemInterfaceFactory $orderItemInterfaceFactory,
        OrderSearchResultsInterfaceFactory $orderSearchResultsFactory,
        SearchCriteriaFactory $searchCriteriaFactory,
        ProductManagement $productManagement,
        OrderAddressInterfaceFactory $orderAddressInterfaceFactory,
        OrderInterface $order,
        OrderCollection $orderCollection
    ) {
        $this->orderInterfaceFactory = $orderInterfaceFactory;
        $this->orderItemInterfaceFactory = $orderItemInterfaceFactory;
        $this->orderSearchResultsFactory = $orderSearchResultsFactory;
        $this->searchCriteriaFactory = $searchCriteriaFactory;
        $this->productManagement = $productManagement;
        $this->orderAddressInterfaceFactory = $orderAddressInterfaceFactory;
        $this->order = $order;
        $this->orderCollection = $orderCollection;
    }

    /**
     * Get order list from system order
     *
     * @param int $customerId
     * @param string $status
     * @param int $page
     * @param int $pageSize
     * @return \AlbertMage\Sales\Api\Data\OrderSearchResultsInterface
     */
    public function getList($customerId, $status = 'all', $page = 1, $pageSize = 10)
    {
        $this->orderCollection->addAttributeToFilter('customer_id', $customerId);
        if ($status != 'all') {
            $this->orderCollection->addAttributeToFilter('status', $status);
        }
        $this->orderCollection->setOrder('updated_at','DESC');
        $this->orderCollection->setCurPage($page);
        $this->orderCollection->setPageSize($pageSize);
        $newOrders = [];
        foreach ($this->orderCollection->getItems() as $item) {
            $newOrders[] = $this->getOrderItem($item);
        }
        // Set search criteria
        $searchCriteria = $this->searchCriteriaFactory->create();
        $searchCriteria->setPageSize($this->orderCollection->getPageSize());
        $searchCriteria->setCurrentPage($this->orderCollection->getCurPage());

        $orderSearchResults = $this->orderSearchResultsFactory->create();
        $orderSearchResults->setItems($newOrders);
        $orderSearchResults->setSearchCriteria($searchCriteria);
        $orderSearchResults->setTotalCount($this->orderCollection->getSize());

        return $orderSearchResults;
    }

    /**
     * Get order item from system order
     *
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @return \AlbertMage\Sales\Api\Data\OrderInterface
     */
    public function getOrderItem(\Magento\Sales\Api\Data\OrderInterface $order)
    {
        $newOrder = $this->orderInterfaceFactory->create(['data' => $order->toArray()]);

        $newOrderItems = [];
        foreach ($order->getItems() as $item) {
            $newOrderItem = $this->orderItemInterfaceFactory->create(['data' => $item->toArray()]);
            $newOrderItem->setProduct($this->productManagement->getListItemById($newOrderItem->getProductId()));
            $newOrderItem->setPayment($item->getPayment());
            $newOrderItems[] = $newOrderItem;
        }
        $newOrder->setItems($newOrderItems);

        return $newOrder;
    }

    /**
     * Get order detail from system order
     *
     * @param int $id
     * @return \AlbertMage\Sales\Api\Data\OrderInterface
     */
    public function getOrderDetail($id)
    {
        $order = $this->order->load($id);

        $newOrder = $this->getOrderItem($order);
        $address = $order->getBillingAddress();
        $newAddress = $this->orderAddressInterfaceFactory->create(['data' => $address->toArray()]);
        return $newOrder->setShippingAddress($newAddress);
    }

}