<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CurrencyCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'currencies' => $this->collection->map(function($data) {
                    return [
                        'id'         => $data->id,
                        'country'       => $data->country,
                        'currency_code'       => $data->currency_code,
                        'currency_symbol'       => $data->symbol,
                    ];
                })
            ]
        ];
    }
}
