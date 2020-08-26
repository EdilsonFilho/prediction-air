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
        'name', 'email', 'password', 'profile', 'phone', 'address', 'last_login_at', 'last_login_ip',
        'date_birth', 'professional_id'
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
            case config('profile.administrator'):
                return 'Administrador(a)';

            case config('profile.professional'):
                return 'Enfermeiro(a)';

            default:
                return 'Paciente';
        }
    }

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y \à\s H:i');
    }

    public function patients()
    {
        return $this->hasMany($this, 'professional_id');
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class, 'professional_id');
    }

    public function getAmountSurveys()
    {
        return $this->surveys->count();
    }

    public function getAmountPatients()
    {
        return $this->patients->count();
    }

    public function getAmountUsers()
    {
        return $this->count();
    }

    public function getAmountProfessionals()
    {
        return $this->where('profile', '=', config('profile.professional'))->count();
    }
}
