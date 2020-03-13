<?php
namespace ApiTransport\Modules\Dogs\Responses;

use Cubex\ApiTransport\Responses\AbstractResponse;

class DogsResponse extends AbstractResponse
{
  /**
   * @var DogResponse[]
   */
  public $dogs = [];
}
