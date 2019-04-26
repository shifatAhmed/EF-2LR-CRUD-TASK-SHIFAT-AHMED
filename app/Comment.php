<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    /**
     * Returns the attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'body', 'post_id'];

    /**
     * Returns the post that owns this comment.
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(\App\Post::class);
    }
}
