<?php
namespace Api\Module;

use Api\Module\Procedures\ProcedureRoute;

interface Module
{
  /**
   * @return ProcedureRoute[]|\Generator
   */
  public function getRoutes();

  public function getUri(): string;
}
