<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = ['name', 'username', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    /**
     * Override passport function to allow authenticating with username
     *
     * @param $identifier
     * @return mixed
     */
    public function findForPassport($identifier) {
        return $this->orWhere('email', $identifier)->orWhere('username', $identifier)->first();
    }
}
