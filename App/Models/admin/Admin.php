<?php

namespace App\Models\admin;

use App\Model;

class Admin extends Model
{
    const TABLE = 'admin';

    public $email;
    public $password;

}