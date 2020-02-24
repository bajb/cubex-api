<?php
namespace Api\Modules\Dogs\Procedures;

use Api\Module\Procedures\AbstractProcedure;

abstract class AbstractDogProcedure extends AbstractProcedure
{
  protected function _randomName()
  {
    $names = [
      'Bolt',
      'Hunter',
      'Alpha',
      'Wolf',
      'Spike',
      'Rhino',
      'Saber',
      'Titus',
      'Blaze',
      'Ripley',
      'Chess',
      'Maze',
      'Ace',
      'Flare',
      'Quiz',
      'Tricks',
      'Harley',
      'Rex',
      'Bandit',
      'Enigma',
      'Raven',
      'Storm',
      'Ripper',
      'Archer',
      'Cobra',
      'Gunner',
      'Valley',
      'Tango',
      'Shadow',
      'Juno',
      'Flame',
      'Apollo',
      'Thunder',
      'Quartz',
      'Mocha',
      'Pistol',
      'Frisk',
      'Rider',
      'Copper',
      'Pip',
      'Ice',
      'Dirt',
      'Solo',
      'River',
      'Vice',
      'Shot',
      'Stinger',
      'Kong',
      'Red',
      'Shank',
    ];
    shuffle($names);
    return array_shift($names);
  }
}
