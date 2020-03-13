<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Modules\Dogs\Responses\DogResponse;
use ApiTransport\Payloads\IdPayload;

class RetrieveDogEndpoint extends AbstractDogEndpoint
{
  public function getVerb(): string
  {
    return self::VERB_GET;
  }

  public function getPayloadClass(): ?string
  {
    return IdPayload::class;
  }

  public function getResponseClass(): string
  {
    return DogResponse::class;
  }

  public function getRequiredPermissions(): array
  {
    return [];
  }

}
