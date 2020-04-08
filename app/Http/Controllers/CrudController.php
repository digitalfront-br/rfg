<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    protected $entidade;
    protected $views;
    protected $nome;

    public function index()
    {
        return view('dashboard.'. $this->views . '.index')->with(['data' => $this->entidade::paginate(10), 'nome' => $this->nome]);
    }
    public function create()
    {
        return view('dashboard.'. $this->views . '.create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        return view('dashboard.'. $this->views . '.show')->with('data', $this->entidade::findOrFail($id));
    }
    public function edit($id)
    {
        return view('dashboard.'. $this->views . '.edit')->with('data', $this->entidade::findOrFail($id));
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
