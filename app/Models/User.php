<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        'role_id',
        'mobile',
        'date_of_birth',
        'gender',
        'address',
        'country',
        'city',
        'postal_code',
        'citizenship',
        'passport_number',
        'status',
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
        'password' => 'hashed',
    ];

    protected $dates = [
        'token_expires_at',
    ];

    protected $appends = ['image_link'];

    public function role()
    {
        return $this->belongsTo(role::class, 'role_id');
    }

    public function additionalInfo()
    {
        return $this->hasOne(AdditionalInfo::class, 'user_id', 'id');
    }

    public function getImageLinkAttribute()
    {
        return $this->image ? asset('public/' . $this->image) : null;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->invite_code = self::generateUniqueInviteCode();
        });
    }

    public static function generateUniqueInviteCode()
    {
        do {
            $code = rand(10000000, 99999999); // 8-digit unique code
        } while (self::where('invite_code', $code)->exists());

        return $code;
    }
}
