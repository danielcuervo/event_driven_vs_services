<?php

namespace Payments\Message\Handler;

use Core\Message\OrderMessage;
use Payments\Message\Event\FraudAssessed;
use SimpleBus\Message\Bus\MessageBus;

class CheckFraud
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
        print_r("Order " . $importOrderCommand->getOrder() . " fraud assessed. <br/>");

        $event = new FraudAssessed($importOrderCommand->getOrder());

        $this->eventBus->handle($event);
    }

}