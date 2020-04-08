<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\CrudController;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends CrudController
{
    public function __construct()
    {
        $this->entidade =   Podcast::class;
        $this->views   =    'podcast';
        $this->nome    =    'podcasts';
    }
}
