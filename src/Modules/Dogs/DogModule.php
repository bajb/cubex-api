<?php
namespace Api\Modules\Dogs;

use Api\Modules\Dogs\Procedures\AssassinateDogs;
use Api\Modules\Dogs\Procedures\CreateDog;
use Api\Modules\Dogs\Procedures\DeleteDog;
use Api\Modules\Dogs\Procedures\InitDogs;
use Api\Modules\Dogs\Procedures\ListDogs;
use Api\Modules\Dogs\Procedures\RetrieveDog;
use ApiTransport\Modules\Dogs\Endpoints\AssassinateDogsEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\CreateDogsEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\DeleteDogEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\InitializeDogsEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\ListDogsEndpoint;
use ApiTransport\Modules\Dogs\Endpoints\RetrieveDogEndpoint;
use Cubex\ApiFoundation\Module\Module;
use Cubex\ApiFoundation\Module\Procedures\ProcedureRoute;

class DogModule extends Module
{
  public function getRoutes()
  {
    yield new ProcedureRoute(new InitializeDogsEndpoint(), InitDogs::class);
    yield new ProcedureRoute(new AssassinateDogsEndpoint(), AssassinateDogs::class);
    yield new ProcedureRoute(new CreateDogsEndpoint(), CreateDog::class);
    yield new ProcedureRoute(new RetrieveDogEndpoint(), RetrieveDog::class);
    yield new ProcedureRoute(new DeleteDogEndpoint(), DeleteDog::class);
    yield new ProcedureRoute(new ListDogsEndpoint(), ListDogs::class);
  }

  public static function getBasePath(): string
  {
    return 'dogs';
  }

}
