<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $guarded = [];

    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
