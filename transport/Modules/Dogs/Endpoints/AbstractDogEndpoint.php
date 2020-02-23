<?php
namespace ApiTransport\Modules\Dogs\Endpoints;

use ApiTransport\Endpoints\AbstractEndpoint;

abstract class AbstractDogEndpoint extends AbstractEndpoint
{
  const BASE_PATH = 'dogs';

  public function getPath(): string
  {
    return self::BASE_PATH;
  }
}
