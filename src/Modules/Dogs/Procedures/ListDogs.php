<?php
namespace Api\Modules\Dogs\Procedures;

use Api\Modules\Cats\Storage\Dog;
use ApiTransport\Modules\Dogs\Payloads\ListDogsPayload;
use ApiTransport\Modules\Dogs\Responses\DogsResponse;
use Packaged\QueryBuilder\Expression\Like\ContainsExpression;
use Packaged\QueryBuilder\Predicate\LikePredicate;

class ListDogs extends AbstractDogProcedure
{
  public function execute(ListDogsPayload $payload): DogsResponse
  {
    $response = new DogsResponse();

    $dogs = Dog::collection(LikePredicate::create('name', ContainsExpression::create($payload->filter)));
    /** @var Dog $dog */
    foreach($dogs as $dog)
    {
      $response->dogs[] = $dog->toApiResponse();
    }

    return $response;
  }
}
