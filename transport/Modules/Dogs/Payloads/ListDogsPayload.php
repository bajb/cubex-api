<?php
namespace ApiTransport\Modules\Dogs\Payloads;

use Cubex\ApiTransport\Payloads\AbstractPayload;

class ListDogsPayload extends AbstractPayload
{
  public $filter;
}
