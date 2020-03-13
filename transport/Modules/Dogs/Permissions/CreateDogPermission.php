<?php
namespace ApiTransport\Modules\Dogs\Permissions;

use Cubex\ApiTransport\Permissions\AbstractPermission;

class CreateDogPermission extends AbstractPermission
{
  public function getKey(): string
  {
    return 'dog.create';
  }

}
