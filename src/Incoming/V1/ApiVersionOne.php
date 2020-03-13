<?php
namespace Api\Incoming\V1;

use Api\Modules\Dogs\DogModule;
use Cubex\ApiFoundation\Controller\ApiController;
use Cubex\ApiFoundation\Module\Module;

class ApiVersionOne extends ApiController
{
  const VERSION = '1.0.0';

  /**
   * @return \Generator|Module[]
   */
  protected function _yieldModules()
  {
    //Yield API Modules
    yield new DogModule();
  }
}
