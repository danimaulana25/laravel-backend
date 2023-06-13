<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_name' => $this->name,
            'product_price' => "$". $this->price,
            'discount_price' => "$". $this->price * 0.9,
            'discount' => "$". $this->price * 0.1,
            'discount_price' => "$". $this->price * 0.9,
        ];
    }
}