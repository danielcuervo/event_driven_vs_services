<?php

namespace Inventory\Message\Subscriber;


use Core\Message\OrderMessage;
use Inventory\Message\Command\Source;
use SimpleBus\Message\Bus\MessageBus;

class TriggerSourcing
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
        $source = new Source($event->getOrder());
        $this->messageBus->handle($source);

    }

}