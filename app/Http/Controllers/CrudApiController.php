<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudApiController extends Controller
{
    protected $entidade;
    protected $collection;
    protected $entity;

    public function index()
    {
        return new $this->collection($this->entidade::paginate(10));
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        return new $this->entity($this->entidade::findOrFail($id));
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
