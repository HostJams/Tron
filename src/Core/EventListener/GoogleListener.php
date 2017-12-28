<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 7:23 PM
 */

namespace Tron\Core\EventListener;
use Tron\Core\ResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class GoogleListener implements EventSubscriberInterface
{
    public function onResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();

        if ($response->isRedirection()
            || ($response->headers->has('Content-Type') && false === strpos($response->headers->get('Content-Type'), 'html'))
            || 'html' !== $event->getRequest()->getRequestFormat()
        ) {
            return;
        }

        $response->setContent($response->getContent().'GA CODE');
    }

    public static function getSubscribedEvents()
    {
        return array('response' => 'onResponse');
    }
}