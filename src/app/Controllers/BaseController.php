<?php

namespace App\Controllers;

class BaseController
{
    public function __construct()
    {

    }

    public function index(string $message): void
    {
        echo $message;
    }
}
