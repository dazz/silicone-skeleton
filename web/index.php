<?php
$loader = require_once __DIR__ . '/../app/vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
\Symfony\Component\Debug\Debug::enable();

$app = require_once __DIR__ . '/../app/bootstrap.php';

$app->run();

