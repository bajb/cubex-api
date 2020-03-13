<?php
namespace Api\Incoming\V1;

use Api\Auth\Authenticator;
use Api\Modules\Dogs\DogModule;
use Cubex\ApiFoundation\Controller\ApiController;
use Cubex\ApiFoundation\Module\Module;
use Packaged\Context\Context;

class ApiVersionOne extends ApiController
{
  const VERSION = '1.0.0';

  public function getAuthenticator(Context $context)
  {
    return Authenticator::withContext($context);
  }

  /**
   * @return \Generator|Module[]
   */
  protected function _yieldModules()
  {
    //Yield API Modules
    yield new DogModule();
  }
}
