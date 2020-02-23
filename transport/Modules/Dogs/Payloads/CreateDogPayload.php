<?php
namespace ApiTransport\Modules\Dogs\Payloads;

use ApiTransport\Payloads\AbstractPayload;

class CreateDogPayload extends AbstractPayload
{
  public $name;
}
