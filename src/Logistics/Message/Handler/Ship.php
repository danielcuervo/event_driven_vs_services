<?php

namespace Logistics\Message\Handler;

use Core\Message\OrderMessage;
use Logistics\Message\Event\Shipped;
use SimpleBus\Message\Bus\MessageBus;

class Ship
{

    /**
     * @var MessageBus
     */
    private $eventBus;

    public function __construct(MessageBus $eventBus)
    {
        $this->eventBus = $eventBus;
    }

    public function handle(OrderMessage $importOrderCommand)
    {
        print_r("Order " . $importOrderCommand->getOrder() . " shipped. <br/>");

        $event = new Shipped($importOrderCommand->getOrder());

        $this->eventBus->handle($event);
    }

}