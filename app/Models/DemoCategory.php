<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoCategory extends Model
{
    protected $guarded = [];

    public function links()
    {
        return $this->hasMany(DemoLink::class, 'demo_category_id');
    }
}
