<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\CrudController;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends CrudController
{
    public function __construct()
    {
        $this->entidade =   Autor::class;
        $this->views   =    'autor';
    }
}
