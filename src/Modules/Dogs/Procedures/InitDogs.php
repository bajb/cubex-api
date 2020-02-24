<?php
namespace Api\Modules\Dogs\Procedures;

use ApiTransport\Modules\Dogs\Payloads\CreateDogPayload;
use ApiTransport\Modules\Dogs\Payloads\ListDogsPayload;
use ApiTransport\Modules\Dogs\Responses\DogsResponse;

class InitDogs extends AbstractDogProcedure
{
  public function execute(): DogsResponse
  {
    $currentDogs = ListDogs::withContext($this)->execute(ListDogsPayload::i());
    if(!empty($currentDogs->dogs))
    {
      //We already have some dogs, send them back.
      return $currentDogs;
    }

    $response = new DogsResponse();
    for($i = 0; $i < 10; $i++)
    {
      $createPl = CreateDogPayload::i();
      $createPl->name = $this->_randomName();
      $response->dogs[] = CreateDog::withContext($this)->execute($createPl);
    }
    return $response;
  }
}
