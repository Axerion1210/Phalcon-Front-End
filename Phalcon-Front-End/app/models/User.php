<?php

namespace App\Models;

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Resultset\Simple;

class User extends Model
{
    const ROLE_ADMIN = 'admin';
    const ROLE_GUEST = 'guest';

    public $id;
    public $username;
    public $password;

    public function initialize()
    {
        $this->setSource('users');
    }
}