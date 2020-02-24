<?php
namespace ApiTransport\Endpoints;

use ApiTransport\Permissions\ApiPermission;

interface ApiEndpoint
{
  /**
   * @return string HTTP Verb e.g. GET, POST, DELETE, PATCH
   */
  public function getVerb(): string;

  /**
   * @return string Path the endpoint can be located
   */
  public function getPath(): string;

  /**
   * Payload Class
   *
   * @return null|string
   */
  public function getPayloadClass(): ?string;

  /**
   * Response Class
   *
   * @return string
   */
  public function getResponseClass(): string;

  /**
   * @return ApiPermission[]
   */
  public function getRequiredPermissions(): array;

  /**
   * @return bool
   */
  public function requiresAuthentication(): bool;
}
