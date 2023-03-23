<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function name(): Attribute
    {
        return new Attribute(
            //las 2 formas de escribir est abien
            get: fn($value) =>ucwords($value),//accesores
            //hace el cambio en el registro al hacer la consulta sin afectar el registro en la base

            set: function ($value) {
                return strtolower($value);// mutadores
            }//transforman el valor antes de ingresarlo e ingresan
        );
    }
    /*
    public function getNameAttribute($value){
        return ucwords($value);//accesores anteriormente
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);//mutadores anteriormente
    }*/
}
