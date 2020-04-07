<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tables;

class TableDefinition extends Model
{
    protected $guarded = [];

    protected $table = 'm_table_definitions';

    public function tables()
    {
        return $this->belongsTo( Tables::class );
    }
}
