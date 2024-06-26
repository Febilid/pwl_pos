<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    public function getJWTIdentifier()
    {
        return $this->getkey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    
    use HasFactory;

    protected $table = 'm_user';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'level_id',
        'username',
        'nama',
        'password',
    ];

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}