<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Responses\BoolResponse;
use Packaged\Http\Request;

class AssassinateDogsEndpoint extends AbstractDogsEndpoint
{
  public function getVerb(): string
  {
    return Request::METHOD_DELETE;
  }

  public function getPayloadClass(): ?string
  {
    return null;
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
