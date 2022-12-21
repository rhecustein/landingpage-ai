<?php

namespace App\Models;

use Database\Factories\user\DeviceTagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceTag extends Model
{
    use HasFactory;
    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return DeviceTagFactory::new();
    }
}
