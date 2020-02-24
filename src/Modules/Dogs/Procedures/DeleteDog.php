<?php
namespace Api\Modules\Dogs\Procedures;

use Api\Modules\Cats\Storage\Dog;
use ApiTransport\Payloads\IdPayload;
use ApiTransport\Responses\BoolResponse;
use Packaged\Dal\Exceptions\DataStore\DaoNotFoundException;

class DeleteDog extends AbstractDogProcedure
{
  public function execute(IdPayload $payload): BoolResponse
  {
    try
    {
      $dog = Dog::loadById($payload->id);
      $dog->delete();
    }
    catch(DaoNotFoundException $e)
    {
      return BoolResponse::create(true, "Dog Already Deleted");
    }
    catch(\Exception $e)
    {
      return BoolResponse::create(true, "Unable to delete dog " . ($dog->id ?? $payload->id));
    }

    return BoolResponse::create(true, "Dog Removed");
  }
}
