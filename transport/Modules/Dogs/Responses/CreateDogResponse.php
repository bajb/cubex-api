<?php
namespace ApiTransport\Modules\Dogs\Responses;

use ApiTransport\Responses\AbstractResponse;

class CreateDogResponse extends AbstractResponse
{
  public $id;
  public $name;
}
