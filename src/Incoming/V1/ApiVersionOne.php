<?php
namespace Api\Incoming\V1;

use Api\Modules\Dogs\DogModule;
use Cubex\ApiFoundation\Module\Module;
use Cubex\Controller\AuthedController;
use Packaged\Context\Context;
use Packaged\Http\Responses\JsonResponse;

class ApiVersionOne extends AuthedController
{
  public function getVersion()
  {
    return '1.0';
  }

  /**
   * @return \Generator|Module[]
   */
  protected function _getModules()
  {
    //Yield API Modules
    yield new DogModule();
  }

  protected function _prepareResponse(Context $c, $result, $buffer = null)
  {
    if(is_array($result) || is_scalar($result))
    {
      $result = JsonResponse::create($result);
    }
    return parent::_prepareResponse($c, $result, $buffer);
  }

  protected function _generateRoutes()
  {
    yield self::_route('version', 'version');
    foreach($this->_getModules() as $module)
    {
      foreach($module->getRoutes() as $route)
      {
        yield $route;
      }
    }
  }
}
