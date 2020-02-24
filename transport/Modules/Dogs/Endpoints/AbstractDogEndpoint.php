<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

abstract class AbstractDogEndpoint extends AssassinateDogsEndpoint
{
  public function getPath(): string
  {
    return parent::getPath() . '/{id@num}';
  }
}
