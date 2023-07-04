<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sales\Api\Data;

/**
 * Order item interface.
 *
 * An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product
 * items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as
 * a purchase order, is emailed to the customer.
 * @api
 * @since 100.0.2
 */
interface OrderItemInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    /*
     * Item ID.
     */
    const ITEM_ID = 'item_id';

    /*
     * Order ID.
     */
    const ORDER_ID = 'order_id';

    /*
     * Product ID.
     */
    const PRODUCT_ID = 'product_id';

    /*
     * SKU.
     */
    const SKU = 'sku';

    /*
     * Name.
     */
    const NAME = 'name';

    /*
     * Product type.
     */
    const PRODUCT_TYPE = 'product_type';

    /*
     * Product.
     */
    const PRODUCT = 'product';

    /*
     * Quantity ordered.
     */
    const QTY_ORDERED = 'qty_ordered';

    /*
     * Price.
     */
    const PRICE = 'price';

    /*
     * Original price.
     */
    const ORIGINAL_PRICE = 'original_price';
    
    /*
     * Discount percent.
     */
    const DISCOUNT_PERCENT = 'discount_percent';

    /*
     * Discount amount.
     */
    const DISCOUNT_AMOUNT = 'discount_amount';

    /*
     * Row total.
     */
    const ROW_TOTAL = 'row_total';

    /**
     * Gets the item ID for the order item.
     *
     * @return int|null Item ID.
     */
    public function getItemId();

    /**
     * Sets the item ID for the order item.
     *
     * @param int $id
     * @return $this
     */
    public function setItemId($id);

    /**
     * Gets the order ID for the order item.
     *
     * @return int|null Order ID.
     */
    public function getOrderId();

    /**
     * Sets the order ID for the order item.
     *
     * @param int $id
     * @return $this
     */
    public function setOrderId($id);

    /**
     * Gets the product ID for the order item.
     *
     * @return int|null Product ID.
     */
    public function getProductId();

    /**
     * Sets the product ID for the order item.
     *
     * @param int $id
     * @return $this
     */
    public function setProductId($id);

    /**
     * Gets the SKU for the order item.
     *
     * @return string SKU.
     */
    public function getSku();

    /**
     * Sets the SKU for the order item.
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);
    
    /**
     * Gets the name for the order item.
     *
     * @return string|null Name.
     */
    public function getName();

    /**
     * Sets the name for the order item.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Gets the product type for the order item.
     *
     * @return string|null Product type.
     */
    public function getProductType();

    /**
     * Sets the product type for the order item.
     *
     * @param string $productType
     * @return $this
     */
    public function setProductType($productType);

    /**
     * Get product
     *
     * @return \AlbertMage\Catalog\Api\Data\ProductInterface
     */
    public function getProduct();

    /**
     * Get product
     *
     * @param \AlbertMage\Catalog\Api\Data\ProductInterface $product
     * @return $this
     */
    public function setProduct(\AlbertMage\Catalog\Api\Data\ProductInterface $product);

    /**
     * Gets the quantity ordered for the order item.
     *
     * @return float|null Quantity ordered.
     */
    public function getQtyOrdered();

    /**
     * Sets the quantity ordered for the order item.
     *
     * @param float $qtyOrdered
     * @return $this
     */
    public function setQtyOrdered($qtyOrdered);

    /**
     * Gets the price for the order item.
     *
     * @return float|null Price.
     */
    public function getPrice();

    /**
     * Sets the price for the order item.
     *
     * @param float $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * Gets the original price for the order item.
     *
     * @return float|null Original price.
     */
    public function getOriginalPrice();

    /**
     * Sets the original price for the order item.
     *
     * @param float $price
     * @return $this
     */
    public function setOriginalPrice($price);

    /**
     * Gets the discount amount for the order item.
     *
     * @return float|null Discount amount.
     */
    public function getDiscountAmount();

    /**
     * Sets the discount amount for the order item.
     *
     * @param float $amount
     * @return $this
     */
    public function setDiscountAmount($amount);

    /**
     * Gets the discount percent for the order item.
     *
     * @return float|null Discount percent.
     */
    public function getDiscountPercent();

    /**
     * Sets the discount percent for the order item.
     *
     * @param float $discountPercent
     * @return $this
     */
    public function setDiscountPercent($discountPercent);

    /**
     * Gets the row total for the order item.
     *
     * @return float|null Row total.
     */
    public function getRowTotal();

    /**
     * Sets the row total for the order item.
     *
     * @param float $amount
     * @return $this
     */
    public function setRowTotal($amount);

}
