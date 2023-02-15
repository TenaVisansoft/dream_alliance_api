<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
Use \Carbon\Carbon;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
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
         return $this->collection->map(function (UserResource $resource) use ($request) {
            return $resource->hide($this->withoutFields)->toArray($request);
        })->all();
    }
}
