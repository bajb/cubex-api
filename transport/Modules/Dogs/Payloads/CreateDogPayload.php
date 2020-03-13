<?php
namespace ApiTransport\Modules\Dogs\Payloads;

use Cubex\ApiTransport\Payloads\AbstractPayload;

class CreateDogPayload extends AbstractPayload
{
  public $name;
}
