<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The name table
     *
     * @var string
     */
    protected $table = "tags";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Relacion de muchos a muchos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }

    /**
     * Scope for search the tag for name
     *
     * @param $query
     * @param $name
     * @param $force
     * @return mixed
     */
    public function scopeSearch($query, $name, $force = false)
    {
        if ($name != '' and $force) return $query->where('name', 'like', $name);
        if ($name != '') return $query->where('name', 'like', "%$name%");
        return $query;
    }
}
