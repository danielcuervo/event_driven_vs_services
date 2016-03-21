<?php

namespace Sales\Message\Command;

use Core\Message\OrderMessage;
use SimpleBus\Message\Name\NamedMessage;

class ImportOrder implements OrderMessage, NamedMessage
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
        return 'import_order';
    }
}