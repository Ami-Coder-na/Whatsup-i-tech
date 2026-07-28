<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoLink extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(DemoCategory::class, 'demo_category_id');
    }
}
