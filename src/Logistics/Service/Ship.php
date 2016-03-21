<?php
/**
 * Created by PhpStorm.
 * User: dramosfernandez
 * Date: 25/02/16
 * Time: 16:55
 */

namespace Logistics\Service;


class Ship
{

    public function ship($order)
    {
        print_r("Order " . $order . " shipped. <br/>");
    }

}