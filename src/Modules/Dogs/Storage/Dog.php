<?php
namespace Api\Modules\Cats\Storage;

use Packaged\Dal\Ql\QlDao;

class Dog extends QlDao
{
  protected $_dataStoreName = 'dogs';

  public $id;
}
