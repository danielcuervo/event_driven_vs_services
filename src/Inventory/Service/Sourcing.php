<?php
/**
 * Created by PhpStorm.
 * User: dramosfernandez
 * Date: 25/02/16
 * Time: 16:55
 */

namespace Inventory\Service;


class Sourcing
{

    public function source($order)
    {
        print_r("Order " . $order . " sourced. <br/>");
    }

}