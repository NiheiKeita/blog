<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [
        "id"
    ];

    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'blog_tags');
    }
    public function blog_blocks()
    {
        return $this->hasMany(BlogBlock::class);
    }

    public  function scopeShowLists($query){
        return $query->where("is_private", false)->get();
    }
}

