<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Payloads\IdPayload;
use ApiTransport\Responses\BoolResponse;
use Packaged\Http\Request;

class DeleteDogEndpoint extends AbstractDogEndpoint
{
  public function getVerb(): string
  {
    return Request::METHOD_DELETE;
  }

  public function getPayloadClass(): ?string
  {
    return IdPayload::class;
  }

  public function getResponseClass(): string
  {
    return BoolResponse::class;
  }

  public function getRequiredPermissions(): array
  {
    return [];
  }

}
