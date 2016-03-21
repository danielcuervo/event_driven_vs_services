<?php

namespace Inventory\Message\Handler;

use Core\Message\OrderMessage;
use Inventory\Message\Event\Sourced;
use SimpleBus\Message\Bus\MessageBus;

class Source
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
        print_r("Order " . $importOrderCommand->getOrder() . " sourced. <br/>");

        $event = new Sourced($importOrderCommand->getOrder());

        $this->eventBus->handle($event);
    }

}