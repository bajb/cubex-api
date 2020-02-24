<?php
namespace ApiTransport\Modules\Dogs\Payloads;

use ApiTransport\Payloads\AbstractPayload;
use Packaged\Context\Context;

class RetrieveDogPayload extends AbstractPayload
{
  public $id;

  public function fromContext(Context $c)
  {
    $pl = parent::fromContext($c);
    $pl->id = $c->routeData()->get('id');
    return $pl;
  }

}
