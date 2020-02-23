<?php
namespace Api;

use Api\Incoming\V1\ApiVersionOne;
use Cubex\Application\Application;
use Cubex\Console\Events\ConsolePrepareEvent;
use Cubex\Cubex;
use Cubex\Events\Handle\ResponsePreSendHeadersEvent;
use Packaged\Config\Provider\Ini\IniConfigProvider;
use Packaged\Dal\DalResolver;
use Packaged\Helpers\Path;
use Packaged\Routing\HealthCheckCondition;
use Packaged\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class ApiApplication extends Application
{
  public function __construct(Cubex $cubex)
  {
    parent::__construct($cubex);

    // Convert errors into exceptions
    set_error_handler(
      function ($errno, $errstr, $errfile, $errline) {
        if((error_reporting() & $errno) && !($errno & E_NOTICE))
        {
          throw new \ErrorException($errstr, 0, $errno, str_replace(dirname(__DIR__), '', $errfile), $errline);
        }
      }
    );

    //Setup Database connections for Console Commands
    $cubex->listen(
      ConsolePrepareEvent::class,
      function (ConsolePrepareEvent $e) {
        $this->setContext($e->getContext());
        $this->_configureConnections();
      }
    );

    $cubex->listen(
      ResponsePreSendHeadersEvent::class,
      function (ResponsePreSendHeadersEvent $e) {
        $resp = $e->getResponse();
        if($resp instanceof \Packaged\Http\Response)
        {
          $resp->enableDebugHeaders();
        }
      }
    );
  }

  protected function _generateRoutes()
  {
    //Handle common health check calls.
    //TODO: Create a health check method for your application
    yield Route::with(new HealthCheckCondition())->setHandler(function () { return Response::create('OK'); });

    $this->_configureConnections();
    yield self::_route('v1', ApiVersionOne::class);

    //Let the parent application handle routes from here
    return parent::_generateRoutes();
  }

  //Setup our database connections
  protected function _configureConnections()
  {
    $ctx = $this->getContext();
    $confDir = Path::system($ctx->getProjectRoot(), 'conf');

    $thisonnectionConfig = new IniConfigProvider();
    $thisonnectionConfig->loadFiles(
      [
        $confDir . DIRECTORY_SEPARATOR . 'defaults' . DIRECTORY_SEPARATOR . 'connections.ini',
        $confDir . DIRECTORY_SEPARATOR . $ctx->getEnvironment() . DIRECTORY_SEPARATOR . 'connections.ini',
      ]
    );
    $datastoreConfig = new IniConfigProvider();
    $datastoreConfig->loadFiles(
      [
        $confDir . DIRECTORY_SEPARATOR . 'defaults' . DIRECTORY_SEPARATOR . 'datastores.ini',
        $confDir . DIRECTORY_SEPARATOR . $ctx->getEnvironment() . DIRECTORY_SEPARATOR . 'datastores.ini',
      ]
    );
    $resolver = new DalResolver($thisonnectionConfig, $datastoreConfig);
    $this->getCubex()->share(DalResolver::class, $resolver);
    $resolver->boot();
  }
}
