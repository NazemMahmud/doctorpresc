<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];


    public function users(){
        // Use user_role table instead of role or users table with foreign keys
        return $this->belongsToMany('App\User', 'user_role', 'role_id', 'user_id');
    }

}
