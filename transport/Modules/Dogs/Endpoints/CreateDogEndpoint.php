<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Modules\Dogs\Payloads\CreateDogPayload;
use ApiTransport\Modules\Dogs\Permissions\CreateDogPermission;
use ApiTransport\Modules\Dogs\Responses\CreateDogResponse;
use Packaged\Http\Request;

class CreateDogEndpoint extends AbstractDogEndpoint
{
  public function getVerb(): string
  {
    return Request::METHOD_POST;
  }

  public function getPayloadClass(): string
  {
    return CreateDogPayload::class;
  }

  public function getResponseClass(): string
  {
    return CreateDogResponse::class;
  }

  public function getRequiredPermissions(): array
  {
    return [new CreateDogPermission()];
  }

}
