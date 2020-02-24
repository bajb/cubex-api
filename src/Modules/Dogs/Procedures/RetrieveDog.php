<?php
namespace Api\Modules\Dogs\Procedures;

use Api\Modules\Cats\Storage\Dog;
use ApiTransport\Modules\Dogs\Responses\DogResponse;
use ApiTransport\Payloads\IdPayload;

class RetrieveDog extends AbstractDogProcedure
{
  public function execute(IdPayload $payload): DogResponse
  {
    $dog = Dog::loadById($payload->id);

    return $dog->toApiResponse();
  }
}
