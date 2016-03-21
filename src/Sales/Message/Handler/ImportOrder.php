<?php

namespace Sales\Message\Handler;
use Core\Message\OrderMessage;
use Sales\Message\Event\OrderImported;
use SimpleBus\Message\Bus\MessageBus;

class ImportOrder
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
        print_r("Order " . $importOrderCommand->getOrder() . " imported. <br/>");

        $event = new OrderImported($importOrderCommand->getOrder());

        $this->eventBus->handle($event);

    }

}