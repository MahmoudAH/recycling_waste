<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Order;
use Illuminate\Database\Eloquent\SoftDeletes;

//use Zizaco\Entrust\Traits\EntrustUserTrait;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait,SoftDeletes;
     //use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','city','phone','verifyToken','role','status',
    ];
    
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
       
    public function order()
    {
        return $this->hasMany('App\Order');

    }
    public function contact()
    {
        return $this->hasMany('App\Contact');

    }
    public function routeNotificationForNexmo($notification)
    {
        return $this->phone;
    }
    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    /*
* @param string|array $roles
*
public function authorizeRoles($roles)
{
    /*
  if (is_array($roles)) {
      return $this->hasAnyRole($roles) || 
             abort(401, 'This action is unauthorized.');
  }
  return $this->hasRole($roles) || 
         abort(401, 'This action is unauthorized.');
}
/*
* Check multiple roles
* @param array $roles
*/
/*
public function hasAnyRole($roles)
{
  return null !== $this->roles()->whereIn(‘name’, $roles)->first();
}
/**
* Check one role
* @param string $role
*
public function hasRole($role)
{
  return null !== $this->roles()->where(‘name’, $role)->first();
}
*/
    
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
    public function roles(){
        return $this->belongsToMany('App\Role');

    }

}
