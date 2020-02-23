<?php
namespace Api\Modules\Dogs;

use Api\Module\Module;
use Api\Module\Procedures\ProcedureRoute;
use Api\Modules\Dogs\Procedures\CreateDog;
use ApiTransport\Modules\Dogs\Endpoints\AbstractDogEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\CreateDogEndpoint;

class DogModule implements Module
{
  public function getRoutes()
  {
    yield new ProcedureRoute(new CreateDogEndpoint(), CreateDog::class);
  }

  public function getUri(): string
  {
    return AbstractDogEndpoint::BASE_PATH;
  }

}
