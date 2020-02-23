<?php
namespace Api\Modules\Dogs\Storage;

use Packaged\Dal\Ql\QlDao;

class Address extends QlDao
{
  protected $_dataStoreName = 'dogs';

  /** @var int */
  public $id;
  /** @var int */
  public $userId;
  /** @var string */
  public $addressLine1;
  /** @var string */
  public $addressLine2;
  /** @var string */
  public $town;
  /** @var string */
  public $county;
  /** @var string */
  public $postCode;
  public $created;
  public $updated;
}
