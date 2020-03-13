<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Modules\Dogs\Payloads\ListDogsPayload;
use ApiTransport\Modules\Dogs\Responses\DogsResponse;

class ListDogsEndpoint extends AbstractDogsEndpoint
{
  public function getVerb(): string
  {
    return self::VERB_GET;
  }

  public function getPayloadClass(): ?string
  {
    return ListDogsPayload::class;
  }

  public function getResponseClass(): string
  {
    return DogsResponse::class;
  }

  public function getRequiredPermissions(): array
  {
    return [];
  }

}
