<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sales\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Order
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class Order extends AbstractModel implements \AlbertMage\Sales\Api\Data\OrderInterface
{
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::ENTITY_ID, $id);
    }

    /**
     * Get increment id
     *
     * @return string|null
     */
    public function getIncrementId()
    {
        return $this->getData(self::INCREMENT_ID);
    }

    /**
     * Set increment id
     *
     * @param string $incrementId
     * @return $this
     */
    public function setIncrementId($incrementId)
    {
        return $this->setData(self::INCREMENT_ID, $incrementId);
    }

    /**
     * Gets the status for the order.
     *
     * @return string|null Status.
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Sets the status for the order.
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get grand total in quote currency
     *
     * @return float|null
     */
    public function getGrandTotal()
    {
        return $this->getData(self::GRAND_TOTAL);
    }

    /**
     * Set grand total in quote currency
     *
     * @param float $grandTotal
     * @return $this
     */
    public function setGrandTotal($grandTotal)
    {
        return $this->setData(self::GRAND_TOTAL, $grandTotal);
    }

    /**
     * Get subtotal in quote currency
     *
     * @return float|null
     */
    public function getSubtotal()
    {
        return $this->getData(self::SUBTOTAL);
    }

    /**
     * Set subtotal in quote currency
     *
     * @param float $subtotal
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        return $this->setData(self::SUBTOTAL, $subtotal);
    }

    /**
     * Gets the subtotal canceled amount for the order.
     *
     * @return float|null Subtotal canceled amount.
     */
    public function getSubtotalCanceled()
    {
        return $this->getData(self::SUBTOTAL_CANCELED);
    }

    /**
     * Sets the subtotal canceled amount for the order.
     *
     * @param float $subtotalCanceled
     * @return $this
     */
    public function setSubtotalCanceled($subtotalCanceled)
    {
        return $this->setData(self::SUBTOTAL_CANCELED, $subtotalCanceled);
    }

    /**
     * Gets the subtotal invoiced amount for the order.
     *
     * @return float|null Subtotal invoiced amount.
     */
    public function getSubtotalInvoiced()
    {
        return $this->getData(self::SUBTOTAL_INVOICED);
    }

    /**
     * Sets the subtotal invoiced amount for the order.
     *
     * @param float $subtotalInvoiced
     * @return $this
     */
    public function setSubtotalInvoiced($subtotalInvoiced)
    {
        return $this->setData(self::SUBTOTAL_INVOICED, $subtotalInvoiced);
    }

    /**
     * Gets the subtotal refunded amount for the order.
     *
     * @return float|null Subtotal refunded amount.
     */
    public function getSubtotalRefunded()
    {
        return $this->getData(self::SUBTOTAL_REFUNDED);
    }

    /**
     * Sets the subtotal refunded amount for the order.
     *
     * @param float $subtotalRefunded
     * @return $this
     */
    public function setSubtotalRefunded($subtotalRefunded)
    {
        return $this->setData(self::SUBTOTAL_REFUNDED, $subtotalRefunded);
    }

    /**
     * Get discount amount in quote currency
     *
     * @return float|null
     */
    public function getDiscountAmount()
    {
        return $this->getData(self::DISCOUNT_AMOUNT);
    }

    /**
     * Set discount amount in quote currency
     *
     * @param float $discountAmount
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        return $this->setData(self::DISCOUNT_AMOUNT, $discountAmount);
    }

    /**
     * Get shipping amount in quote currency
     *
     * @return float|null
     */
    public function getShippingAmount()
    {
        return $this->getData(self::SHIPPING_AMOUNT);
    }

    /**
     * Set shipping amount in quote currency
     *
     * @param float $shippingAmount
     * @return $this
     */
    public function setShippingAmount($shippingAmount)
    {
        return $this->setData(self::SHIPPING_AMOUNT, $shippingAmount);
    }

    /**
     * Gets the shipping discount amount for the order.
     *
     * @return float|null Shipping discount amount.
     */
    public function getShippingDiscountAmount()
    {
        return $this->getData(self::SHIPPING_DISCOUNT_AMOUNT);
    }

    /**
     * Sets the shipping discount amount for the order.
     *
     * @param float $amount
     * @return $this
     */
    public function setShippingDiscountAmount($amount)
    {
        return $this->setData(self::SHIPPING_DISCOUNT_AMOUNT, $amount);
    }

    /**
     * Gets the total quantity ordered for the order.
     *
     * @return float|null Total quantity ordered.
     */
    public function getTotalQtyOrdered()
    {
        return $this->getData(self::TOTAL_QTY_ORDERD);
    }

    /**
     * Sets the total quantity ordered for the order.
     *
     * @param float $totalQtyOrdered
     * @return $this
     */
    public function setTotalQtyOrdered($totalQtyOrdered)
    {
        return $this->setData(self::TOTAL_QTY_ORDERD, $totalQtyOrdered);
    }

    /**
     * Gets the total item count for the order.
     *
     * @return int|null Total item count.
     */
    public function getTotalItemCount()
    {
        return $this->getData(self::TOTAL_ITAM_COUNT);
    }

    /**
     * Sets the total item count for the order.
     *
     * @param int $totalItemCount
     * @return $this
     */
    public function setTotalItemCount($totalItemCount)
    {
        return $this->setData(self::TOTAL_ITAM_COUNT, $totalItemCount);
    }

    /**
     * Gets the total canceled for the order.
     *
     * @return float|null Total canceled.
     */
    public function getTotalCanceled()
    {
        return $this->getData(self::TOTAL_CANCELED);
    }

   /**
     * Sets the total canceled for the order.
     *
     * @param float $totalCanceled
     * @return $this
     */
    public function setTotalCanceled($totalCanceled)
    {
        return $this->setData(self::TOTAL_CANCELED, $totalCanceled);
    }

    /**
     * Gets the total invoiced amount for the order.
     *
     * @return float|null Total invoiced amount.
     */
    public function getTotalInvoiced()
    {
        return $this->getData(self::TOTAL_INVOICED);
    }

    /**
     * Sets the total invoiced amount for the order.
     *
     * @param float $totalInvoiced
     * @return $this
     */
    public function setTotalInvoiced($totalInvoiced)
    {
        return $this->setData(self::TOTAL_INVOICED, $totalInvoiced);
    }

    /**
     * Gets the total amount refunded amount for the order.
     *
     * @return float|null Total amount refunded.
     */
    public function getTotalRefunded()
    {
        return $this->getData(self::TOTAL_REFUNDED);
    }

    /**
     * Sets the total amount refunded amount for the order.
     *
     * @param float $totalRefunded
     * @return $this
     */
    public function setTotalRefunded($totalRefunded)
    {
        return $this->setData(self::TOTAL_REFUNDED, $totalRefunded);
    }

    /**
     * Gets the total paid for the order.
     *
     * @return float|null Total paid.
     */
    public function getTotalPaid()
    {
        return $this->getData(self::TOTAL_PAID);
    }

    /**
     * Sets the total paid for the order.
     *
     * @param float $totalPaid
     * @return $this
     */
    public function setTotalPaid($totalPaid)
    {
        return $this->setData(self::TOTAL_PAID, $totalPaid);
    }

    /**
     * Get totals by items
     *
     * @return \AlbertMage\Sales\Api\Data\OrderItemInterface[]|null
     */
    public function getItems()
    {
        return $this->getData(self::ITEMS);
    }

    /**
     * Set totals by items
     *
     * @param \AlbertMage\Sales\Api\Data\OrderItemInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null)
    {
        return $this->setData(self::ITEMS, $items);
    }

    /**
     * Gets the shipping address, if any, for the order.
     *
     * @return \AlbertMage\Sales\Api\Data\OrderAddressInterface|null Shipping address. Otherwise, null.
     */
    public function getShippingAddress()
    {
        return $this->getData(self::SHIPPING_ADDRESS);
    }

    /**
     * Sets the shipping address, if any, for the order.
     *
     * @param \AlbertMage\Sales\Api\Data\OrderAddressInterface $shippingAddress
     * @return $this
     */
    public function setShippingAddress(\AlbertMage\Sales\Api\Data\OrderAddressInterface $shippingAddress = null)
    {
        return $this->setData(self::SHIPPING_ADDRESS, $shippingAddress);
    }

    /**
     * Gets order payment
     *
     * @return \Magento\Sales\Api\Data\OrderPaymentInterface|null
     */
    public function getPayment()
    {
        return $this->getData(self::PAYMENT);
    }

    /**
     * Sets order payment
     *
     * @param \Magento\Sales\Api\Data\OrderPaymentInterface|null $payment
     * @return \Magento\Sales\Api\Data\OrderPaymentInterface
     */
    public function setPayment(\Magento\Sales\Api\Data\OrderPaymentInterface $payment = null)
    {
        return $this->setData(self::PAYMENT, $payment);
    }

    /**
     * Gets the created-at timestamp for the order.
     *
     * @return string|null Created-at timestamp.
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Sets the created-at timestamp for the order.
     *
     * @param string $createdAt timestamp
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Gets the updated-at timestamp for the order.
     *
     * @return string|null Updated-at timestamp.
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Sets the updated-at timestamp for the order.
     *
     * @param string $timestamp
     * @return $this
     */
    public function setUpdatedAt($timestamp)
    {
        return $this->setData(self::UPDATED_AT, $timestamp);
    }
}
