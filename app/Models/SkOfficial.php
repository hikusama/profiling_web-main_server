<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkOfficial extends Model
{
    /** @use HasFactory<\Database\Factories\SkOfficialFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'position',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function insertedYouth()
    {
        return $this->hasMany(YouthUser::class, 'user_id', 'user_id');
    }
}
