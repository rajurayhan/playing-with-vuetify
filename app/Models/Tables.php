<?php

namespace App\Models;
use App\Models\TableDefinition;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    protected $guarded = [];

    protected $table = 'm_tables';

    public function definations()
    {
        return $this->hasMany( TableDefinition::class );
    }
}
