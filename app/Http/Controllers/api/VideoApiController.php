<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\CrudApiController;
use App\Http\Resources\VideoCollection;
use App\Http\Resources\VideoResource;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoApiController extends CrudApiController
{
    public function __construct()
    {
        $this->entidade =   Video::class;
        $this->collection   =   VideoCollection::class;
        $this->entity   =   VideoResource::class;
        $this->nome   =   'videos';
    }
}
