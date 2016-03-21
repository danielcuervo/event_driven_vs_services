<?php
/**
 * Created by PhpStorm.
 * User: dramosfernandez
 * Date: 25/02/16
 * Time: 16:55
 */

namespace Payments\Service;


class Fraud
{

    public function assess($order)
    {
        print_r("Order " . $order . " fraud assessed. <br/>");
    }

}