<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\CrudApiController;
use App\Http\Resources\PodcastCollection;
use App\Http\Resources\PodcastResource;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastApiController extends CrudApiController
{
    public function __construct()
    {
        $this->entidade =   Podcast::class;
        $this->collection   =   PodcastCollection::class;
        $this->entity   =   PodcastResource::class;
        $this->nome   =   'podcasts';
    }
}
