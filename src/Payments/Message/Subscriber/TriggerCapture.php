<?php

namespace Payments\Message\Subscriber;


use Core\Message\OrderMessage;
use Payments\Message\Command\Capture;
use SimpleBus\Message\Bus\MessageBus;

class TriggerCapture
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
        $capture = new Capture($event->getOrder());
        $this->messageBus->handle($capture);

    }

}