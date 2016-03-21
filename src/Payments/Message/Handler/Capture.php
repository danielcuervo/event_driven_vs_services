<?php

namespace Payments\Message\Handler;

use Core\Message\OrderMessage;
use Payments\Message\Event\Captured;
use SimpleBus\Message\Bus\MessageBus;

class Capture
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
        print_r("Order " . $importOrderCommand->getOrder() . " payment captured. <br/>");

        $event = new Captured($importOrderCommand->getOrder());

        $this->eventBus->handle($event);
    }

}