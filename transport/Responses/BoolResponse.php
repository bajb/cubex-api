<?php
namespace ApiTransport\Responses;

use ApiTransport\Payloads\AbstractPayload;

class BoolResponse extends AbstractPayload
{
  public static function create(bool $result, string $message = '')
  {
    $resp = new static();
    $resp->result = $result;
    $resp->message = $message;
    return $resp;
  }

  /**
   * @var bool
   */
  public $result;
  /**
   * @var string
   */
  public $message;
}
