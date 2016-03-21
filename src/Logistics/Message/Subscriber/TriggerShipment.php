<?php

namespace Logistics\Message\Subscriber;


use Core\Message\OrderMessage;
use Logistics\Message\Command\Ship;
use SimpleBus\Message\Bus\MessageBus;

class TriggerShipment
{

    /**
     * @var MessageBus
     */
    private $messageBus;

    public function __construct(MessageBus $messageBus)
    {

        $this->messageBus = $messageBus;
    }

    public function handle(OrderMessage $event)
    {
        $source = new Ship($event->getOrder());
        $this->messageBus->handle($source);

    }

}