<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\CrudApiController;
use App\Http\Resources\AutorCollection;
use App\Http\Resources\AutorResource;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorApiController extends CrudApiController
{
    public function __construct()
    {
        $this->entidade =   Autor::class;
        $this->collection   =   AutorCollection::class;
        $this->entity   =   AutorResource::class;
        $this->nome   =   'autors';
    }
}
