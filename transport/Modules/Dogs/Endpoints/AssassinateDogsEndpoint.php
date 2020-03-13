<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Responses\BoolResponse;

class AssassinateDogsEndpoint extends AbstractDogsEndpoint
{
  public function getVerb(): string
  {
    return self::VERB_DELETE;
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
