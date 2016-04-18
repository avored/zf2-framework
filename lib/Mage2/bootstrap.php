<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\Reference;

$sc = include __DIR__ . '/container.php';

$request = Request::createFromGlobals();

$sc->setParameter('routes', include __DIR__.'/../../Modules/routes.php');
$sc->register('listener.string_response', 'Mage2\StringResponseListener');
$sc->getDefinition('dispatcher')
	->addMethodCall('addSubscriber', array(new Reference('listener.string_response')))
;
$sc->setParameter('charset', 'UTF-8');

$framework = $sc->get('framework');

$response = $framework->handle($request);

$response->send();