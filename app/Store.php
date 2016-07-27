<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['store_name', 'store_description'];

    // Relationship between user and store models
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
