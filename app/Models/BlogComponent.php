<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogComponent extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [
        "id"
    ];
    public function component()
    {
        return $this->belongsTo(Component::class);
    }
    public function blog_block()
    {
        return $this->belongsTo(Blog::class);
    }
}
