<?php

namespace Modules\Landingai\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Landingai extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'landingais';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Landingai\database\factories\LandingaiFactory::new();
    }
}
