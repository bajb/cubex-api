<?php
namespace Api\Modules\Dogs\Procedures;

use Api\Modules\Cats\Storage\Dog;
use ApiTransport\Responses\BoolResponse;
use Packaged\QueryBuilder\Predicate\NotEqualPredicate;

class AssassinateDogs extends AbstractDogProcedure
{
  public function execute(): BoolResponse
  {
    //Add a filter to the query, to bypass the truncate restriction.  - this should not be done in production
    Dog::collection(NotEqualPredicate::create('id', 0))->delete();
    return BoolResponse::create(true, "Deleted all the dogs");
  }
}
