<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entidade;

class EntidadeController extends Controller
{
    // Entidade =   Entidade;
    // $this->collection   =   PodcastCollection::class;
    // $this->entity   =   PodcastResource::class;
    // $this->nome   =   'podcasts';

    public function index()
    {
        return Entidade::paginate(10);
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        return Entidade::findOrFail($id);
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
