<?php

namespace Payments\Message\Subscriber;


use Core\Message\OrderMessage;
use Payments\Message\Command\CheckFraud;
use SimpleBus\Message\Bus\MessageBus;

class TriggerFraud
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
        $checkFraud = new CheckFraud($event->getOrder());
        $this->messageBus->handle($checkFraud);
    }

}