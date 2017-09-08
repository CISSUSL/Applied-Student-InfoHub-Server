<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
}
