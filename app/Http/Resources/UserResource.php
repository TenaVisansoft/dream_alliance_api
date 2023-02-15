<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    protected $withoutFields = ['email','phone'];

    public function hide(array $fields)
    {
        $this->withoutFields = $fields;
        return $this;
    }

    protected function filterFields($array)
    {
        return collect($array)->forget($this->withoutFields)->toArray();
    }


    public function toArray($request)
    {
       return $this->filterFields([
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
        ]);
    }
}
