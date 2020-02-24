<?php
namespace Api\Modules\Dogs\Procedures;

use Api\Modules\Cats\Storage\Dog;
use ApiTransport\Modules\Dogs\Payloads\RetrieveDogPayload;
use ApiTransport\Modules\Dogs\Responses\DogResponse;

class RetrieveDog extends AbstractDogProcedure
{
  public function execute(RetrieveDogPayload $payload): DogResponse
  {
    $dog = Dog::loadById($payload->id);

    return $dog->toApiResponse();
  }
}
