<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The name table
     *
     * @var string
     */
    protected $table = "categories";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Inicia el retorno
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    /**
     * Scope for search the category for name
     *
     * @param $query
     * @param $name
     * @return mixed
     */
    public function scopeSearchName($query, $name)
    {
        return $query->where('name', 'like', $name);
    }

}
