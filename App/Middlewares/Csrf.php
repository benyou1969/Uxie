<?php

namespace Middleware;

class Csrf
{
    private $token;

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->token = $_POST['_token'] ?? null;
            $this->validateToken();
        }
    }

    private function validateToken()
    {
        if (!is_null($this->token) && $this->token === session('_token')) {
            return true;
        }

        throw new \Exception("No CSRF token detected (use csrf_field() function)", 28);
    }
}
