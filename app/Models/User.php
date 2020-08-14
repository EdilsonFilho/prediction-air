<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile', 'phone', 'address', 'last_login_at', 'last_login_ip'
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

    public function getDescriptionProfile($profile = null)
    {

        $profile = $profile || $this->profile;

        switch ($profile) {
            case config('profile.administrator'):
                return 'Administrador';

            case config('profile.professional'):
                return 'Profissional';

            default:
                return 'Paciente';
        }
    }

    public static function getProfiles()
    {
        return ['' => 'Selecione...', 1 => 'Administrador', 2 => 'Profissional', 3 => 'Paciente'];
    }
}
