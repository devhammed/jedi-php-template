<?php

use App\Controllers\UsersController;

/**
 * This demonstrate using PHP controller classes.
 *
 *  @var \Jedi\Application $app
 */

$app->get('/', [UsersController::class, 'index']);

$app->get('/:user(\d+)', [UsersController::class, 'show']);
