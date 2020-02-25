<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

abstract class AbstractDogEndpoint extends AbstractDogsEndpoint
{
  public function getPath(): string
  {
    return parent::getPath() . '/{id@num}';
  }
}
