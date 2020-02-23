<?php
namespace ApiTransport\Modules\Dogs\Permissions;

use ApiTransport\Permissions\AbstractPermission;

class CreateDogPermission extends AbstractPermission
{
  public function getKey(): string
  {
    return 'dog.create';
  }

}
