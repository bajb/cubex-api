<?php
namespace Api\Modules\Dogs\Procedures;

use Api\Modules\Cats\Storage\Dog;
use ApiTransport\Modules\Dogs\Payloads\CreateDogPayload;
use ApiTransport\Modules\Dogs\Responses\DogResponse;
use Packaged\Helpers\ValueAs;

class CreateDog extends AbstractDogProcedure
{
  public function execute(CreateDogPayload $payload): DogResponse
  {
    $dog = new Dog();
    $dog->name = ValueAs::nonempty($payload->name, $this->_randomName());
    $dog->save();

    return $dog->toApiResponse();
  }
}
