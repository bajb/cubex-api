<?php
namespace Api\Modules\Dogs;

use Api\Module\Module;
use Api\Module\Procedures\ProcedureRoute;
use Api\Modules\Dogs\Procedures\CreateDog;
use Api\Modules\Dogs\Procedures\ListDogs;
use Api\Modules\Dogs\Procedures\RetrieveDog;
use ApiTransport\Modules\Dogs\Endpoints\AbstractDogEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\CreateDogEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\ListDogsEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\RetrieveDogEndpoint;

class DogModule implements Module
{
  public function getRoutes()
  {
    yield new ProcedureRoute(new CreateDogEndpoint(), CreateDog::class);
    yield new ProcedureRoute(new RetrieveDogEndpoint(), RetrieveDog::class);
    yield new ProcedureRoute(new ListDogsEndpoint(), ListDogs::class);
  }

  public function getUri(): string
  {
    return AbstractDogEndpoint::BASE_PATH;
  }

}
