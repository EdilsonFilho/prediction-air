<?php

namespace App\Models;

use App\Enums\ProfilesType;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile',
        'phone',
        'address',
        'date_birth',
        'last_login_at',
        'last_login_ip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function settings($name = null)
    {
        if ($name) {
            $setting = $this->hasMany(Setting::class)->where('name', '=', $name)->first();

            return isset($setting) ? $setting->value : null;
        } else {
            return $this->hasMany(Setting::class);
        }
    }

    public function getLastLoginAtAttribute()
    {
        return ($this->attributes['last_login_at'] != null) ? Carbon::parse($this->attributes['last_login_at'])->format('d/m/Y \à\s H:i:s') : null;
    }

    public function getDateBirthAttribute($value)
    {
        if (isset($value)) {
            return Carbon::parse($value)->format('d/m/Y');
        }
    }

    public function setDateBirthAttribute($value)
    {
        $this->attributes['date_birth'] = isset($value) ? Carbon::createFromFormat('d/m/Y', $value) : null;
    }

    public function getProfilePicture()
    {
        $image = $this->files()->where('highlight', '=', 1)->first();

        return isset($image) ? $image->name : null;
    }

    public function getIdFromProfilePicture()
    {
        $image = $this->files()->where('highlight', '=', 1)->first();

        return isset($image) ? $image->id : null;
    }

    public function files()
    {
        return $this->belongsToMany(File::class)->orderBy('created_at', 'desc');
    }

    public function getDescriptionProfile()
    {
        switch ($this->profile) {
            case ProfilesType::ZeroRoleValue:
                return ProfilesType::ZeroRoleDescription;

            case ProfilesType::OneRoleValue:
                return ProfilesType::OneRoleDescription;

            case ProfilesType::TwoRoleValue:
                return ProfilesType::TwoRoleDescription;

            case ProfilesType::ThreeRoleValue:
                return ProfilesType::ThreeRoleDescription;

            default:
                return 'Perfil não identificado';
        }
    }

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y \à\s H:i');
    }
}
