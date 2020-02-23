<?php
namespace Api\Module\Procedures;

use ApiTransport\ApiEndpoint;
use ApiTransport\Payloads\AbstractPayload;
use Packaged\Context\Context;
use Packaged\Http\Responses\JsonResponse;
use Packaged\Routing\Handler\Handler;
use Packaged\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class ProcedureRoute extends Route implements Handler
{
  /** @var */
  protected $_endpoint;
  /** @var string */
  protected $_procedureClass;

  public function __construct(ApiEndpoint $endpoint, string $procedureClass)
  {
    $this->_endpoint = $endpoint;
    $this->_procedureClass = $procedureClass;
  }

  public function match(Context $context): bool
  {
    if(parent::match($context))
    {
      if($this->_endpoint->requiresAuthentication())
      {
        //TODO: Validate the auth token correctly
        if(!$context->request()->query->has('token'))
        {
          return false;
        }
      }
      //TODO: Get permissions from context user
      $userPermissions = [];
      foreach($this->_endpoint->getRequiredPermissions() as $permission)
      {
        if(!in_array($permission->getKey(), $userPermissions))
        {
          return false;
        }
      }
      return true;
    }
    return false;
  }

  public function getHandler()
  {
    return $this;
  }

  public function handle(Context $c): Response
  {
    $procedure = new $this->_procedureClass();
    if(!($procedure instanceof Procedure))
    {
      throw new \Exception("Invalid procedure class given");
    }

    $plClass = $this->_endpoint->getPayloadClass();
    $payload = new $plClass();
    if($payload instanceof AbstractPayload)
    {
      $payload->fromContext($c);
    }

    $response = $procedure->execute($payload);

    return JsonResponse::create($response);
  }
}
