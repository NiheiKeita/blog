<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogBlock extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [
        "id"
    ];
    public function blog_components()
    {
        return $this->hasMany(BlogComponent::class);
    }
    public function block()
    {
        return $this->belongsTo(BlogComponent::class);
    }
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
