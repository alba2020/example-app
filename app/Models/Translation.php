<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = 'translation';

    public function prefix()
    {
        return explode('_', 'EX_USER_NOT_FOUND')[0];
    }
}
