<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\CrudApiController;
use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagApiController extends CrudApiController
{
    public function __construct()
    {
        $this->entidade =   Tag::class;
        $this->collection   =   TagCollection::class;
        $this->entity   =   TagResource::class;
        $this->nome   =   'Tags';
    }
}
