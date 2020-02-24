<?php
define('PHP_START', microtime(true));

use Api\ApiApplication;
use Api\Context\ApiContext;
use Cubex\Cubex;

$loader = require_once(dirname(__DIR__) . '/vendor/autoload.php');
try
{
  //Create a global Cubex instance, using SkeletonContext
  $cubex = Cubex::withCustomContext(ApiContext::class, dirname(__DIR__), $loader);
  //Handle the incoming request through "DefaultApplication"
  $cubex->handle(new ApiApplication($cubex));
  //Call the shutdown command
  $cubex->shutdown();
}
catch(Throwable $e)
{
  var_dump($e->getMessage());
}
