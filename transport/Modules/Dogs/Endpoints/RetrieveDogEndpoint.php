<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Modules\Dogs\Payloads\RetrieveDogPayload;
use ApiTransport\Modules\Dogs\Responses\DogResponse;
use Packaged\Http\Request;

class RetrieveDogEndpoint extends AbstractDogEndpoint
{
  public function getVerb(): string
  {
    return Request::METHOD_GET;
  }

  public function getPath(): string
  {
    return parent::getPath() . '/{id}';
  }

  public function getPayloadClass(): string
  {
    return RetrieveDogPayload::class;
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
