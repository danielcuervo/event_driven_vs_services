<?php

namespace Sales\Message\Event;

use Core\Message\OrderMessage;
use SimpleBus\Message\Name\NamedMessage;

class OrderImported implements OrderMessage, NamedMessage
{

    /**
     * @var
     */
    private $order;

    public function __construct($order)
    {

        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * The name of this particular type of message.
     *
     * @return string
     */
    public static function messageName()
    {
        return 'order_imported';
    }

}