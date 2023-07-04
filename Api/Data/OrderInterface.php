<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sales\Api\Data;

/**
 * Order interface.
 *
 * An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product
 * items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as
 * a purchase order, is emailed to the customer.
 * @api
 * @since 100.0.2
 */
interface OrderInterface
{

    const ENTITY_ID = 'entity_id';

    const INCREMENT_ID = 'increment_id';

    const STATUS = 'status';

    const GRAND_TOTAL = 'grand_total';

    const SUBTOTAL = 'subtotal';

    const SUBTOTAL_CANCELED = 'subtotal_canceled';

    const SUBTOTAL_INVOICED = 'subtotal_invoiced';

    const SUBTOTAL_REFUNDED = 'subtotal_refunded';

    const DISCOUNT_AMOUNT = 'discount_amount';

    const SHIPPING_AMOUNT = 'shipping_amount';

    const SHIPPING_DISCOUNT_AMOUNT = 'shipping_discount_amount';

    const TOTAL_QTY_ORDERD = 'total_qty_ordered';

    const TOTAL_ITAM_COUNT = 'total_item_count';

    const TOTAL_CANCELED = 'total_canceled';

    const TOTAL_INVOICED = 'total_invoiced';

    const TOTAL_REFUNDED = 'total_refunded';

    const TOTAL_PAID = 'total_paid';

    const TOTAL_QTY_ORDERED = 'total_qty_ordered';

    const ITEMS = 'items';

    const SHIPPING_ADDRESS = 'shipping_address';

    const PAYMENT = 'payment';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get increment id
     *
     * @return string|null
     */
    public function getIncrementId();

    /**
     * Set increment id
     *
     * @param string $incrementId
     * @return $this
     */
    public function setIncrementId($incrementId);

    /**
     * Gets the status for the order.
     *
     * @return string|null Status.
     */
    public function getStatus();

    /**
     * Sets the status for the order.
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * Get grand total in quote currency
     *
     * @return float|null
     */
    public function getGrandTotal();

    /**
     * Set grand total in quote currency
     *
     * @param float $grandTotal
     * @return $this
     */
    public function setGrandTotal($grandTotal);

    /**
     * Get subtotal in quote currency
     *
     * @return float|null
     */
    public function getSubtotal();

    /**
     * Set subtotal in quote currency
     *
     * @param float $subtotal
     * @return $this
     */
    public function setSubtotal($subtotal);

    /**
     * Gets the subtotal canceled amount for the order.
     *
     * @return float|null Subtotal canceled amount.
     */
    public function getSubtotalCanceled();

    /**
     * Sets the subtotal canceled amount for the order.
     *
     * @param float $subtotalCanceled
     * @return $this
     */
    public function setSubtotalCanceled($subtotalCanceled);

    /**
     * Gets the subtotal invoiced amount for the order.
     *
     * @return float|null Subtotal invoiced amount.
     */
    public function getSubtotalInvoiced();

    /**
     * Sets the subtotal invoiced amount for the order.
     *
     * @param float $subtotalInvoiced
     * @return $this
     */
    public function setSubtotalInvoiced($subtotalInvoiced);

    /**
     * Gets the subtotal refunded amount for the order.
     *
     * @return float|null Subtotal refunded amount.
     */
    public function getSubtotalRefunded();

    /**
     * Sets the subtotal refunded amount for the order.
     *
     * @param float $subtotalRefunded
     * @return $this
     */
    public function setSubtotalRefunded($subtotalRefunded);

    /**
     * Get discount amount in quote currency
     *
     * @return float|null
     */
    public function getDiscountAmount();

    /**
     * Set discount amount in quote currency
     *
     * @param float $discountAmount
     * @return $this
     */
    public function setDiscountAmount($discountAmount);

    /**
     * Get shipping amount in quote currency
     *
     * @return float|null
     */
    public function getShippingAmount();

    /**
     * Set shipping amount in quote currency
     *
     * @param float $shippingAmount
     * @return $this
     */
    public function setShippingAmount($shippingAmount);

    /**
     * Gets the shipping discount amount for the order.
     *
     * @return float|null Shipping discount amount.
     */
    public function getShippingDiscountAmount();

    /**
     * Sets the shipping discount amount for the order.
     *
     * @param float $amount
     * @return $this
     */
    public function setShippingDiscountAmount($amount);
    
    /**
     * Gets the total quantity ordered for the order.
     *
     * @return float|null Total quantity ordered.
     */
    public function getTotalQtyOrdered();

    /**
     * Sets the total quantity ordered for the order.
     *
     * @param float $totalQtyOrdered
     * @return $this
     */
    public function setTotalQtyOrdered($totalQtyOrdered);

    /**
     * Gets the total item count for the order.
     *
     * @return int|null Total item count.
     */
    public function getTotalItemCount();

    /**
     * Sets the total item count for the order.
     *
     * @param int $totalItemCount
     * @return $this
     */
    public function setTotalItemCount($totalItemCount);

    /**
     * Gets the total canceled for the order.
     *
     * @return float|null Total canceled.
     */
    public function getTotalCanceled();

   /**
     * Sets the total canceled for the order.
     *
     * @param float $totalCanceled
     * @return $this
     */
    public function setTotalCanceled($totalCanceled);

    /**
     * Gets the total invoiced amount for the order.
     *
     * @return float|null Total invoiced amount.
     */
    public function getTotalInvoiced();

    /**
     * Sets the total invoiced amount for the order.
     *
     * @param float $totalInvoiced
     * @return $this
     */
    public function setTotalInvoiced($totalInvoiced);

    /**
     * Gets the total amount refunded amount for the order.
     *
     * @return float|null Total amount refunded.
     */
    public function getTotalRefunded();

    /**
     * Sets the total amount refunded amount for the order.
     *
     * @param float $totalRefunded
     * @return $this
     */
    public function setTotalRefunded($totalRefunded);

    /**
     * Gets the total paid for the order.
     *
     * @return float|null Total paid.
     */
    public function getTotalPaid();

    /**
     * Sets the total paid for the order.
     *
     * @param float $totalPaid
     * @return $this
     */
    public function setTotalPaid($totalPaid);

    /**
     * Get totals by items
     *
     * @return \AlbertMage\Sales\Api\Data\OrderItemInterface[]|null
     */
    public function getItems();

    /**
     * Set totals by items
     *
     * @param \AlbertMage\Sales\Api\Data\OrderItemInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null);

    /**
     * Gets the shipping address, if any, for the order.
     *
     * @return \AlbertMage\Sales\Api\Data\OrderAddressInterface|null Shipping address. Otherwise, null.
     */
    public function getShippingAddress();

    /**
     * Sets the shipping address, if any, for the order.
     *
     * @param \AlbertMage\Sales\Api\Data\OrderAddressInterface $shippingAddress
     * @return $this
     */
    public function setShippingAddress(\AlbertMage\Sales\Api\Data\OrderAddressInterface $shippingAddress = null);

    /**
     * Gets order payment
     *
     * @return \Magento\Sales\Api\Data\OrderPaymentInterface|null
     */
    public function getPayment();

    /**
     * Sets order payment
     *
     * @param \Magento\Sales\Api\Data\OrderPaymentInterface|null $payment
     * @return \Magento\Sales\Api\Data\OrderPaymentInterface
     */
    public function setPayment(\Magento\Sales\Api\Data\OrderPaymentInterface $payment = null);

    /**
     * Gets the created-at timestamp for the order.
     *
     * @return string|null Created-at timestamp.
     */
    public function getCreatedAt();

    /**
     * Sets the created-at timestamp for the order.
     *
     * @param string $createdAt timestamp
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Gets the updated-at timestamp for the order.
     *
     * @return string|null Updated-at timestamp.
     */
    public function getUpdatedAt();

    /**
     * Sets the updated-at timestamp for the order.
     *
     * @param string $timestamp
     * @return $this
     */
    public function setUpdatedAt($timestamp);
}
