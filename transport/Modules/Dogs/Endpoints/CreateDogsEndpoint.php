<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Modules\Dogs\Payloads\CreateDogPayload;
use ApiTransport\Modules\Dogs\Permissions\CreateDogPermission;
use ApiTransport\Modules\Dogs\Responses\DogResponse;
use Packaged\Http\Request;

class CreateDogsEndpoint extends AbstractDogEndpoint
{
  public function getVerb(): string
  {
    return Request::METHOD_POST;
  }

  public function getPayloadClass(): ?string
  {
    return CreateDogPayload::class;
  }

  public function getResponseClass(): string
  {
    return DogResponse::class;
  }

  public function getRequiredPermissions(): array
  {
    return [];
    return [new CreateDogPermission()];
  }

}
