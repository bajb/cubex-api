<?php
namespace ApiTransport\Payloads;

use Packaged\Context\Context;

class IdPayload extends AbstractPayload
{
  public $id;

  public function fromContext(Context $c)
  {
    $pl = parent::fromContext($c);
    $pl->id = $c->routeData()->get('id');
    return $pl;
  }
}
