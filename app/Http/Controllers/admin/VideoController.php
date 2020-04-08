<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\CrudController;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends CrudController
{
    public function __construct()
    {
        $this->entidade =   Video::class;
        $this->views   =   'video';
        $this->nome   =   'videos';
    }
}
