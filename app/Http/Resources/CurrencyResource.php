<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'currency' => [
                    'id'         => $this->id,
                    'country'       => $this->country,
                    'currency_code' => $this->currency_code,
                    'currency_symbol'=> $this->symbol,
                ]
            ]
        ];
    }
}
