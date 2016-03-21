<?php
/**
 * Created by PhpStorm.
 * User: dramosfernandez
 * Date: 25/02/16
 * Time: 16:14
 */

namespace Payments\Message\Command;


use Core\Message\OrderMessage;
use SimpleBus\Message\Name\NamedMessage;

class CheckFraud implements OrderMessage, NamedMessage
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
        return 'check_fraud';
    }
}