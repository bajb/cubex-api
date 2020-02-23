<?php
namespace Api\Module\Procedures;

use ApiTransport\ApiPayload;
use ApiTransport\ApiResponse;

interface Procedure
{
  public function execute(ApiPayload $payload): ApiResponse;
}
