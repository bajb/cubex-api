<?php
namespace ApiTransport\Endpoints;

use ApiTransport\ApiEndpoint;

abstract class AbstractEndpoint implements ApiEndpoint
{
  public function getRequiredPermissions(): array
  {
    return [];
  }

  public function requiresAuthentication(): bool
  {
    return true;
  }
}
