<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
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
          'client_name' => $this->client_name,
          'client_address' => $this->client_address,
          'client_city' => $this->client_city,
          'item' => $this->item,
          'item_quantity' => $this->item_quantity,
          'item_total_price' => $this->item_total_price,
          'item_delivery_price' => $this->item_delivery_price,
          'created_at' => $this->created_at,
        ];
    }
}
