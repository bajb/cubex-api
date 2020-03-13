<?php
namespace Api\Auth;

use Cubex\ApiFoundation\Auth\ApiAuthenticator;
use Cubex\ApiTransport\Permissions\ApiPermission;

class Authenticator extends ApiAuthenticator
{
  public function isAuthenticated(): bool
  {
    return $this->getContext()->request()->query->has('token');
  }

  public function hasPermission(ApiPermission ...$permission)
  {
    return true;
  }

}
