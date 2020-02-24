<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Modules\Dogs\Payloads\ListDogsPayload;
use ApiTransport\Modules\Dogs\Responses\DogsResponse;
use Packaged\Http\Request;

class ListDogsEndpoint extends AbstractDogEndpoint
{
  public function getVerb(): string
  {
    return Request::METHOD_GET;
  }

  public function getPayloadClass(): string
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
