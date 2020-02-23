<?php
namespace Api\Modules\Dogs\Procedures;

use Api\Module\Procedures\AbstractProcedure;
use ApiTransport\ApiPayload;
use ApiTransport\ApiResponse;
use ApiTransport\Modules\Dogs\Responses\CreateDogResponse;

class CreateDog extends AbstractProcedure
{
  public function execute(ApiPayload $payload): ApiResponse
  {
    $response = new CreateDogResponse();
    $response->id = rand(1, 1000);
    $response->name = "Mr Dog";
    return $response;
  }
}
