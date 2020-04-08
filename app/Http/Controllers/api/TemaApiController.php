<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\CrudApiController;
use App\Http\Resources\TemaCollection;
use App\Http\Resources\TemaIdResource;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaApiController extends CrudApiController
{
    public function __construct()
    {
        $this->entidade =   Tema::class;
        $this->collection   =   TemaCollection::class;
        $this->entity   =   TemaIdResource::class;
        $this->nome   =   'Temas';
    }
    public function show($id)
    {
        return new $this->entity($this->entidade::findOrFail($id));
    }
}
