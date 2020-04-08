<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\CrudController;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends CrudController
{
    public function __construct()
    {
        $this->entidade =   Tag::class;
        $this->views   =    'tag';
    }
}
