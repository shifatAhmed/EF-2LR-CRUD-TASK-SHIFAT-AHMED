<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    /**
     * Attributes that are mass assignable.
     */
    protected $fillable = ['title', 'body', 'slug', 'user_id'];

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Returns the owner of this post.
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    /**
     * Returns the comments for this post.
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }
}
