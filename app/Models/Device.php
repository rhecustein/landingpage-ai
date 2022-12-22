<?php

namespace App\Models;

use Database\Factories\user\DeviceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'phone', 'is_deleted'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->hasMany(DeviceTag::class);
    }
    public function scopeCurrentUser()
    {
        return $this->where('user_id', auth()->user()->id);
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return DeviceFactory::new();
    }
}
