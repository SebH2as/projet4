<?php
declare(strict_types=1);

namespace Projet4\Tools;

class Request
{
  private $_post;
  private $_get;

  public function __construct()
  {
    $this->_post = $_POST;
    $this->_get = $_GET;
  }

  public function post(string $key = null, ?string $default = null): ?string
  {
      return $this->checkGlobal($this->_post, $key, $default);
  }

  public function get(string $key = null, ?string $default = null): ?string
  {
      return $this->checkGlobal($this->_get, $key, $default);
  }

  private function checkGlobal(array $global, string $key = null, ?string $default = null): ?string
  {
    if ($key) {
      if (isset($global[$key])) {
        return htmlspecialchars($global[$key]);
      } else {
        return $default ?: null;
      }
    }
    return $global;
  }
}

