<?php

namespace AppBundle\Controller;
use Inventory\Service\Sourcing;
use Logistics\Service\Ship;
use Payments\Service\Capture;
use Payments\Service\Fraud;
use Sales\Message\Command\ImportOrder;
use Sales\Service\Importer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/services/{order}", name="services")
     */
    public function servicesAction($order)
    {
        echo "Flow with services <br/>";
        echo "-----------------------<br/>";

        $importer = new Importer();
        $importer->import($order);

        if ($this->getParameter('captureAtTheStart')) {
            $importer = new Capture();
            $importer->capture($order);
        }

        $importer = new Fraud();
        $importer->assess($order);

        if (
            !$this->getParameter('captureAtTheEnd')
            && !$this->getParameter('captureAtTheStart')
        ) {
            $importer = new Capture();
            $importer->capture($order);
        }

        if (!$this->getParameter('skipSourcing')) {
            $importer = new Sourcing();
            $importer->source($order);
        }

        $importer = new Ship();
        $importer->ship($order);

        if (
            $this->getParameter('captureAtTheEnd')
            && !$this->getParameter('captureAtTheStart')
        ) {
            $importer = new Capture();
            $importer->capture($order);
        }

        return new Response();
    }

    /**
     * @Route("/messages/{order}", name="events")
     */
    public function eventsAction($order)
    {
        echo "Flow with messaging <br/>";
        echo "-----------------------<br/>";

        $command = new ImportOrder($order);
        $this->get("command_bus")->handle($command);

        return new Response();
    }

    public function secondClient(Request $request, $order)
    {
        $importer = new Importer();
        $importer->import($order);

        $importer = new Fraud();
        $importer->assess($order);

        if (!$this->getParameter('captureAtTheEnd')) {
            $importer = new Capture();
            $importer->capture($order);
        }

        $importer = new Sourcing();
        $importer->source($order);

        $importer = new Ship();
        $importer->ship($order);

        if ($this->getParameter('captureAtTheEnd')) {
            $importer = new Capture();
            $importer->capture($order);
        }

        return new Response();
    }

    public function thirdClient(Request $request, $order)
    {
        $importer = new Importer();
        $importer->import($order);

        if ($this->getParameter('captureAtTheStart')) {
            $importer = new Capture();
            $importer->capture($order);
        }

        $importer = new Fraud();
        $importer->assess($order);

        if (
            !$this->getParameter('captureAtTheEnd')
            && !$this->getParameter('captureAtTheStart')
        ) {
            $importer = new Capture();
            $importer->capture($order);
        }

        if (!$this->getParameter('skipSourcing')) {
            $importer = new Sourcing();
            $importer->source($order);
        }

        $importer = new Ship();
        $importer->ship($order);

        if (
            $this->getParameter('captureAtTheEnd')
            && !$this->getParameter('captureAtTheStart')
        ) {
            $importer = new Capture();
            $importer->capture($order);
        }

        return new Response();
    }
}
