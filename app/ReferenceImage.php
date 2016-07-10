<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferenceImage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'referenceimage';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['price'];

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
