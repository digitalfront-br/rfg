<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\CrudController;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends CrudController
{
    public function __construct()
    {
        $this->entidade =   Tema::class;
        $this->views   =    'tema';
    }
}
