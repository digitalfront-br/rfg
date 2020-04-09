<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TemaIdResource extends JsonResource
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
            'tema'      =>  $this->tema,
            $this->mergeWhen($request->has('tipo') && $request->tipo <= 3,[
                'itens'    =>  EntidadeResource::collection($this->entidades->where('tipo', $request->tipo))
            ]),
            $this->mergeWhen($request->tipo >= 4, [
                'itens' =>  null
            ])
        ];
    }
}
