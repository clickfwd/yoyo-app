<?php
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Clickfwd\Yoyo\Yoyo;
use Clickfwd\Yoyo\View;

require __DIR__.'/../vendor/autoload.php';

$app = AppFactory::create();

require __DIR__.'/../app/bootloader.php';

$app->get('/', function (Request $request, Response $response, $args) {

    ob_start();
    
    include __DIR__.'/../app/resources/views/layout.php';
    
    $content = ob_get_clean();
    
    $response->getBody()->write($content);
    
    return $response;
});

$app->any('/yoyo', function (Request $request, Response $response, $args) 
{
  // Routing to component name → action

  $output = (new Yoyo())->update();
  
  $response->getBody()->write($output);
  
  return $response;
});

$app->run();
