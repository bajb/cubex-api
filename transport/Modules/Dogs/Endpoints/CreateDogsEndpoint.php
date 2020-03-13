<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Modules\Dogs\Payloads\CreateDogPayload;
use ApiTransport\Modules\Dogs\Permissions\CreateDogPermission;
use ApiTransport\Modules\Dogs\Responses\DogResponse;

class CreateDogsEndpoint extends AbstractDogsEndpoint
{
  public function getVerb(): string
  {
    return self::VERB_POST;
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
  }

  public function getPermissions(): array
  {
    return [new CreateDogPermission()];
  }

}
