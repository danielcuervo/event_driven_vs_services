<?php
/**
 * Created by PhpStorm.
 * User: dramosfernandez
 * Date: 25/02/16
 * Time: 16:55
 */

namespace Payments\Service;


class Capture
{

    public function capture($order)
    {
        print_r("Order " . $order . " payment captured. <br/>");
    }

}