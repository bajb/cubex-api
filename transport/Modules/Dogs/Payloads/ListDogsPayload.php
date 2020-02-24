<?php
namespace ApiTransport\Modules\Dogs\Payloads;

use ApiTransport\Payloads\AbstractPayload;

class ListDogsPayload extends AbstractPayload
{
  public $filter;
}
