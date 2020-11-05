<?php

namespace App\Controllers;

use Jedi\Context;

class UsersController
{
    public function index()
    {
        return [1, 2, 3];
    }

    public function show(Context $context)
    {
        return $context->args->user;
    }
}
