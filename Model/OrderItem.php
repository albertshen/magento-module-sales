<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sales\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class OrderItem
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class OrderItem extends AbstractModel implements \AlbertMage\Sales\Api\Data\OrderItemInterface
{

    /**
     * Gets the item ID for the order item.
     *
     * @return int|null Item ID.
     */
    public function getItemId()
    {
        return $this->getData(self::ITEM_ID);
    }

    /**
     * Sets the item ID for the order item.
     *
     * @param int $id
     * @return $this
     */
    public function setItemId($id)
    {
        return $this->setData(self::ITEM_ID, $id);
    }

    /**
     * Gets the order ID for the order item.
     *
     * @return int|null Order ID.
     */
    public function getOrderId()
    {
        return $this->getData(self::ORDER_ID);
    }

    /**
     * Sets the order ID for the order item.
     *
     * @param int $id
     * @return $this
     */
    public function setOrderId($id)
    {
        return $this->setData(self::ORDER_ID, $id);
    }

    /**
     * Gets the product ID for the order item.
     *
     * @return int|null Product ID.
     */
    public function getProductId()
    {
        return $this->getData(self::PRODUCT_ID);
    }

    /**
     * Sets the product ID for the order item.
     *
     * @param int $id
     * @return $this
     */
    public function setProductId($id)
    {
        return $this->setData(self::PRODUCT_ID, $id);
    }

    /**
     * Gets the SKU for the order item.
     *
     * @return string SKU.
     */
    public function getSku()
    {
        return $this->getData(self::SKU);
    }

    /**
     * Sets the SKU for the order item.
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * Gets the name for the order item.
     *
     * @return string|null Name.
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Sets the name for the order item.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Gets the product type for the order item.
     *
     * @return string|null Product type.
     */
    public function getProductType()
    {
        return $this->getData(self::PRODUCT_TYPE);
    }

    /**
     * Sets the product type for the order item.
     *
     * @param string $productType
     * @return $this
     */
    public function setProductType($productType)
    {
        return $this->setData(self::PRODUCT_TYPE, $productType);
    }

    /**
     * Get product
     *
     * @return \AlbertMage\Catalog\Api\Data\ProductInterface
     */
    public function getProduct()
    {
        return $this->getData(self::PRODUCT);
    }

    /**
     * Get product
     *
     * @param \AlbertMage\Catalog\Api\Data\ProductInterface $product
     * @return $this
     */
    public function setProduct(\AlbertMage\Catalog\Api\Data\ProductInterface $product)
    {
        return $this->setData(self::PRODUCT, $product);
    }

    /**
     * Gets the quantity ordered for the order item.
     *
     * @return float|null Quantity ordered.
     */
    public function getQtyOrdered()
    {
        return $this->getData(self::QTY_ORDERED);
    }

    /**
     * Sets the quantity ordered for the order item.
     *
     * @param float $qtyOrdered
     * @return $this
     */
    public function setQtyOrdered($qtyOrdered)
    {
        return $this->setData(self::QTY_ORDERED, $qtyOrdered);
    }

    /**
     * Gets the price for the order item.
     *
     * @return float|null Price.
     */
    public function getPrice()
    {
        return $this->getData(self::PRICE);
    }

    /**
     * Sets the price for the order item.
     *
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        return $this->setData(self::PRICE, $price);
    }

    /**
     * Gets the original price for the order item.
     *
     * @return float|null Original price.
     */
    public function getOriginalPrice()
    {
        return $this->getData(self::ORIGINAL_PRICE);
    }

    /**
     * Sets the original price for the order item.
     *
     * @param float $price
     * @return $this
     */
    public function setOriginalPrice($price)
    {
        return $this->setData(self::ORIGINAL_PRICE, $price);
    }

    /**
     * Gets the discount amount for the order item.
     *
     * @return float|null Discount amount.
     */
    public function getDiscountAmount()
    {
        return $this->getData(self::DISCOUNT_AMOUNT);
    }

    /**
     * Sets the discount amount for the order item.
     *
     * @param float $amount
     * @return $this
     */
    public function setDiscountAmount($amount)
    {
        return $this->setData(self::DISCOUNT_AMOUNT, $amount);
    }

    /**
     * Gets the discount percent for the order item.
     *
     * @return float|null Discount percent.
     */
    public function getDiscountPercent()
    {
        return $this->getData(self::DISCOUNT_PERCENT);
    }

    /**
     * Sets the discount percent for the order item.
     *
     * @param float $discountPercent
     * @return $this
     */
    public function setDiscountPercent($discountPercent)
    {
        return $this->setData(self::DISCOUNT_PERCENT, $discountPercent);
    }

    /**
     * Gets the row total for the order item.
     *
     * @return float|null Row total.
     */
    public function getRowTotal()
    {
        return $this->getData(self::ROW_TOTAL);
    }

    /**
     * Sets the row total for the order item.
     *
     * @param float $amount
     * @return $this
     */
    public function setRowTotal($amount)
    {
        return $this->setData(self::ROW_TOTAL, $amount);
    }
}