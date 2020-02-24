<?php
namespace Api\Modules\Cats\Storage;

use ApiTransport\Modules\Dogs\Responses\DogResponse;
use Packaged\Dal\Ql\QlDao;

class Dog extends QlDao
{
  protected $_dataStoreName = 'dogs';

  public $id;
  public $name;

  public function toApiResponse(): DogResponse
  {
    $resp = new DogResponse();
    $resp->id = $this->id;
    $resp->name = $this->name;
    return $resp;
  }
}
