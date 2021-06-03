<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    
    public function toArray($request)
    {
        $url = env('APP_URL');
        return [
            "id"=> $this->id,
            "category_id"=> $this->category_id,
            "product_id"=>$this->product_id,
            "name"=>$this->name,
            "title"=>$this->title,
            "price"=>$this->price,
            "description"=>$this->description,
            "product_img"=>unserialize($this->product_img),
            "product_img_url"=> $url.'/uploads/product/',
            "options"=> unserialize($this->options),
            "best_selling"=>$this->best_selling,
            "popular"=>$this->popular,
            "order_type"=>$this->order_type,
            "product_type"=>$this->product_type,
            "created_at"=>$this->created_at,
            "updated_at"=>$this->updated_at           
        ];
    }
}
