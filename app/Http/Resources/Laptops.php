<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Laptops extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'owner_name' => $this->owner_name,
            'country' => $this->country,
            'year' => $this->year,
            'price' => $this->price,
            'laptop_model' => $this->laptop_model,
        ];
    }
}
