<?php

namespace App\Models;

use App\Models\Relation\TemaVideo;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tema extends Model
{
    protected   $table  =   'temas';
    public $timestamps = false;

    public function entidades()
    {
        return $this->belongsToMany(Entidade::class);
    }
}
