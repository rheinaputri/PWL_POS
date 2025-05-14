<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'm_user';// Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id';// Mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = ['username',  'password','nama', 'level_id', 'created_at', 'update_at'];
    protected $hidden = ['password'];
    protected $casts = ['passwrod' => 'hashed'];
    
    public function level(): BelongsTo {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
