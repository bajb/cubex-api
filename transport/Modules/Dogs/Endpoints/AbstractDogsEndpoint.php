<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use Api\Modules\Dogs\DogModule;
use Cubex\ApiTransport\Endpoints\AbstractEndpoint;

abstract class AbstractDogsEndpoint extends AbstractEndpoint
{
  public function getPath(): string
  {
    return DogModule::getBasePath();
  }
}
