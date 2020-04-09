<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EntidadeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        =>  $this->id,
            'titulo'    =>  $this->titulo,
            $this->mergeWhen($this->tipo === 1, [
                'tipo'      =>  'autor',
                // 'contato' =>  'sassss',
            ]),
            $this->mergeWhen($this->tipo === 2, [
                'tipo'      =>  'video',
                // 'url' =>  $this->video,
            ]),
            $this->mergeWhen($this->tipo === 3, [
                'tipo'      =>  'podcast',
                // 'audio' =>  $this->audio,
                // 'url'   =>  $this->video,
            ]),
            'img'       =>  [
                'mini'  =>  $this->miniatura,
                'capa'  =>  $this->capa
            ]
        ];
    }
}
