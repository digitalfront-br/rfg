<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'        =>  $this->id,
            'titulo'    =>  $this->titulo,
            'img'       =>  [
                'mini'  =>  $this->miniatura,
                'capa'  =>  $this->capa
            ]
        ];
    }
    public function without()
    {

    }
}
