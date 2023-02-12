<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Sales\Model;

use AlbertMage\Sales\Model\OrderConsumer;

class OrderCreateConsumer extends OrderConsumer
{
    const EVENT_NAME = 'order_create_consume';
}