<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','password','username','fname','lname','name','address','contact','email','profile_path','distributor_id'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function phone()
    {
        return $this->hasMany('App\Phone');
    }
    public function country(){
        return $this->belongsTo('App\Country');
    }
    // public function roles()
    // {
    //     return $this->belongsToMany('App\Role');
    // }
}
