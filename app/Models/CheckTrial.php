<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckTrial extends Model
{
    use HasFactory;
    protected $fillable = ['no', 'attempt'];
    public const LIMIT_REQUEST = 5;
}
