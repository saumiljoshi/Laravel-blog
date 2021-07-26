<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_no',
        'address',
        'city',
        'state',
        'Zip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function posts()
  {
    return $this->hasMany(Post::class, 'user_id');
  }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    public function setPasswordAttribute($password){

        $this->attributes['password'] = bcrypt($password);
       
    }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function can_post()
    {
      $role = $this->role;
      if ($role == 'user' || $role == 'admin') {
        return true;
      }
      return false;
    }
  
    public function is_admin()
    {
      $role = $this->role;
      if ($role == 'admin') {
        return true;
      }
      return false;
    }
    
}
