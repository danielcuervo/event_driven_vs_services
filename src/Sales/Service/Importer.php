<?php
/**
 * Created by PhpStorm.
 * User: dramosfernandez
 * Date: 25/02/16
 * Time: 16:59
 */

namespace Sales\Service;


use Payments\Service\Fraud;

class Importer
{

    public function import($order)
    {
        print_r("Order " . $order . " imported. <br/>");
    }

}