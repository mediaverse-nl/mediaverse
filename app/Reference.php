<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reference';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';

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
     * Get the comments for the blog post.
     */
    public function referenceimage()
    {
        return $this->hasMany('App\referenceimage');
    }
}
