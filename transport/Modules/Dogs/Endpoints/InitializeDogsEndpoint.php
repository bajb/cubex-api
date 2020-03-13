<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Modules\Dogs\Responses\DogsResponse;

class InitializeDogsEndpoint extends AbstractDogsEndpoint
{
  public function getVerb(): string
  {
    return self::VERB_POST;
  }

  public function getPath(): string
  {
    return parent::getPath() . '/init';
  }

  public function getPayloadClass(): ?string
  {
    return null;
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
